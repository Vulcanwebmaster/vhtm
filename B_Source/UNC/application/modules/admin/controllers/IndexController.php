<?php
class Admin_IndexController extends Zend_Controller_Action
{
	protected $mAdmin;
	public function  init()
	{
	      $layoutPath = APPLICATION_PATH  . '/templates/admin';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
	      
	      $this->mAdmin=new Admin_Model_Madmin();
	      session_start();		  
	}
	public function indexAction()
	{
		if (!isset($_SESSION['user']))
		{
			$this->_helper->layout()->disableLayout();
		}
		else $this->_redirect($this->view->baseUrl().'/../admin/index/home');
	}
	
	public function checkAction()
	{
		$username=$this->_request->getParam('username');
		$password=$this->_request->getParam('password');

		if ($this->mAdmin->isExistAccount($username,$password))
		{

			$account=$this->mAdmin->getAccountByUser($username);
			$_SESSION['role_id']=$account['role_id'];
			$_SESSION['user']=$username;

			$_SESSION['role'] = $this->mAdmin->getRoleByUser($username);
			
			$_SESSION['user_id']=$account['user_id'];
			$this->_redirect($this->view->baseUrl().'/../admin/index/home');
		}
		else $this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	public function logoutAction()
	{
		unset($_SESSION['user']);
		unset($_SESSION['role_id']);
		unset($_SESSION['user_id']);
		unset($_SESSION['role']);
		$this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	public function homeAction()
	{
		$this->view->headTitle('UNC - Website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js',"text/javascript");
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js',"text/javascript");
	
		require_once 'library/google-api-php-client/src/contrib/Google_AnalyticsService.php';
		require_once 'library/google-api-php-client/src/Google_Client.php';
		require_once 'library/google-api-php-client/src/contrib/Google_PlusService.php';
		
		$client = new Google_Client();
		$client->setApplicationName('UNC Analytic');
		// Visit https://code.google.com/apis/console?api=plus to generate your
		// client id, client secret, and to register your redirect uri.
		$client->setClientId('279286939351.apps.googleusercontent.com');
		$client->setClientSecret('i5HVVmJBcyfUKAKKlCnTcmFT');
		$client->setRedirectUri('http://localhost/unc/admin/index/home');
		$client->setDeveloperKey('AI39si5bTBzp64elKkWUKKqS55vOWfNz71TzxhGPQ0wnycBKw-1V8wIh5xz-QYtplsCGTlB-wkfm42hcKmG_HiBNDrt3B6kgzA');
		
		$plus = new Google_PlusService($client);
		$service = new Google_AnalyticsService($client);
		
		if (isset($_GET['code'])) {
			  $client->authenticate();
			  $_SESSION['token'] = $client->getAccessToken();
			  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		  	  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		}
		
		if (isset($_SESSION['token'])) {
		  	$client->setAccessToken($_SESSION['token']);
		}
		
		if ($client->getAccessToken()) {
		  		$props = $service->management_webproperties->listManagementWebproperties("~all");
			  print "<h1>Web Properties</h1><pre>" . print_r($props, true) . "</pre>";
			
			  $accounts = $service->management_accounts->listManagementAccounts();
			  print "<h1>Accounts</h1><pre>" . print_r($accounts, true) . "</pre>";
			
			  $segments = $service->management_segments->listManagementSegments();
			  print "<h1>Segments</h1><pre>" . print_r($segments, true) . "</pre>";
			
			  $goals = $service->management_goals->listManagementGoals("~all", "~all", "~all");
			  print "<h1>Segments</h1><pre>" . print_r($goals, true) . "</pre>";
			
			  $_SESSION['token'] = $client->getAccessToken();
		} else {
		  	$authUrl = $client->createAuthUrl();
		  	print "<a href='$authUrl'>Connect Me!</a>";
		}
	}

	function runMainDemo($analytics)
	{
		try 
		{
		    // Step 2. Get the user's first profile ID.
		    $profileId = $this->getFirstProfileId($analytics);
		    if (isset($profileId)) 
		    {
		      // Step 3. Query the Core Reporting API.
		      $results = getResults($analytics, $profileId);
		      // Step 4. Output the results.
		      printResults($results);
		    }
		
		} 
		catch (apiServiceException $e) 
		{
		    // Error from the API.
		    print 'There was an API error : ' . $e->getCode() . ' : ' . $e->getMessage();
		
		} 
		catch (Exception $e) 
		{
		    print 'There wan a general error : ' . $e->getMessage();
		}
	}
	
	function getFirstprofileId(&$analytics) 
	{
		  $accounts = $analytics->management_accounts->listManagementAccounts();
		
		  if (count($accounts->getItems()) > 0) {
		    $items = $accounts->getItems();
		    $firstAccountId = $items[0]->getId();
		
		    $webproperties = $analytics->management_webproperties
		        ->listManagementWebproperties($firstAccountId);
		
		    if (count($webproperties->getItems()) > 0) {
		      $items = $webproperties->getItems();
		      $firstWebpropertyId = $items[0]->getId();
		
		      $profiles = $analytics->management_profiles
		          ->listManagementProfiles($firstAccountId, $firstWebpropertyId);
		
		      if (count($profiles->getItems()) > 0) {
		        $items = $profiles->getItems();
		        return $items[0]->getId();
		
		      } else {
		        throw new Exception('No profiles found for this user.');
		      }
		    } else {
		      throw new Exception('No webproperties found for this user.');
		    }
		  } else {
		    throw new Exception('No accounts found for this user.');
		  }
	}
	
	


}
?>