<?php
class Admin_GetnewssettingController extends Zend_Controller_Action
{
	private $mgetnews;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/admin';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
		  $this->mgetnews = new Admin_Model_mgetnews();
		  session_start();
		  
		  if(isset($_SESSION['role']))
		  	$this->role = $_SESSION['role'];
		  else {
			  $this->_redirect($this->view->baseUrl().'/../admin');
		  }
		  if(isset($_SESSION['user']))
		 	 $this->user = $_SESSION['user'];
		  else {
			  $this->_redirect($this->view->baseUrl().'/../admin');
		  }
		  
		  $this->view->headTitle('UNC - Admin website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
	}
	
	function indexAction()
	{
		$paginator = Zend_Paginator::factory($this->mgetnews->getListCampaigns());
        $paginator->setItemCountPerPage(5);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->list=$paginator;
		$this->view->title="Cài đặt lấy tin tự động";
		$this->view->role = $this->role;
			
		
	}
}