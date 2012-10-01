<?php
	class Admin_UploadvideoController extends Zend_Controller_Action
	{
		protected $mVideo;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		      
		      session_start();
			  $this->mVideo = new Admin_Model_Mvideo;
			  
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
		    $youtube  = new Zend_Gdata_YouTube();
		 
		    try {
		        $feed = $youtube->getUserUploads('tiendn1010');
				foreach ($feed as $video)
				 	{
				 		$video_link = $video->getVideoId();
				 		if($this->mVideo->exitsVideo($video_link)==false)
						{
							$input = array(
											'video_title'		=> $video->getVideoTitle(),
											'video_description' => $video->getVideoDescription(),
											'video_link'		=> $video_link
							);
							$this->mVideo->insertVideo($input);
						}
					}
		    }
		    catch (Exception $ex) {
		        echo $ex->getMessage();
		        exit;
		    }
		 	
			$paginator = Zend_Paginator::factory($this->mVideo->getListVideo());
        	$paginator->setItemCountPerPage(6);        
        	$paginator->setPageRange(3);
        	$currentPage = $this->_request->getParam('page',1);
         	$paginator->setCurrentPageNumber($currentPage);
        	$this->view->list=$paginator;
			$this->view->title = 'Quản lý video';
		}
		
		function _httpClient()
		{
			$authenticationURL= 'https://www.google.com/accounts/ClientLogin';
						Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
						$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
							              $username = 'tiendn1010@gmail.com',
							              $password = 'Tiendnit2',
							              $service 	= 'youtube',
							              $client 	= null,
							              $source 	= 'NIWApp', // a short string identifying your application
							              $loginToken 	= null,
							              $loginCaptcha = null,
							              $authenticationURL
							           );
			return $httpClient;
		}
		
		function uploadAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			if($this->_request->isPost())
			{
				$title = $this->_request->getPost('title');
				$description = $this->_request->getPost('description');
				if($title !=null & $description!=null)
				{
					if ($_FILES["file"]["name"]!='')
					{
						$dir = dirname($_FILES["file"]["tmp_name"]);
						$destination = $dir . DIRECTORY_SEPARATOR . $_FILES["file"]["name"];
						rename($_FILES["file"]["tmp_name"], $destination);
						
						$httpClient = $this->_httpClient();
									   
						Zend_Loader::loadClass('Zend_Gdata_YouTube');
					 	$yt = new Zend_Gdata_YouTube($httpClient, 'NIW-App-1.0', '661085061264.apps.googleusercontent.com', 'AI39si4UPUxw1FE5hqSi0Z-B-5z3PIVovbBWKmqiMI3cXJ7lhvjJcABV-eqimb2EeSiuedWK8N9OGOdB1namX1CqqYki8jEfSQ');
						$yt->setMajorProtocolVersion(2);
						$myVideoEntry = new Zend_Gdata_YouTube_VideoEntry();
						
						$filesource = $yt->newMediaFileSource($destination);
					    $filesource->setContentType('video/quicktime');
					    $filesource->setSlug($destination);
						
						$myVideoEntry->setMediaSource($filesource);
						$myVideoEntry->setVideoTitle($title);
						$myVideoEntry->setVideoDescription($description);
						
						$myVideoEntry->setVideoCategory('Autos');
						$myVideoEntry->SetVideoTags('cars, funny');
						$myVideoEntry->setVideoDeveloperTags(array('mydevtag', 'anotherdevtag'));
						
						// set the video's location -- this is also optional
						$yt->registerPackage('Zend_Gdata_Geo');
						$yt->registerPackage('Zend_Gdata_Geo_Extension');
						$where = $yt->newGeoRssWhere();
						$position = $yt->newGmlPos('37.0 -122.0');
						$where->point = $yt->newGmlPoint($position);
						$myVideoEntry->setWhere($where);
						
						$uploadUrl = 'http://uploads.gdata.youtube.com/feeds/api/users/default/uploads';
						try {
						  	$newEntry = $yt->insertEntry($myVideoEntry, $uploadUrl, 'Zend_Gdata_YouTube_VideoEntry');
						} catch (Zend_Gdata_App_HttpException $httpException) {
						  echo $httpException->getRawResponseBody();
						} catch (Zend_Gdata_App_Exception $e) {
						    echo $e->getMessage();
						}
						
						//if(file_exists($destination))
							//unlink($destination);
						echo '<script type="text/javascript">alert("Video đang được upload trên YOUTUBE !");</script>';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
					else echo '<script type="text/javascript">alert("Vui lòng chọn file !");</script>';
				}
				else 
				{
					echo '<script type="text/javascript">alert("Vui lòng nhập đầy đủ thông tin !");</script>';
				}
				
			}
			$this->view->title = 'Upload video';
		}
		
		function delAction()
		{
			$video_link =  $this->_request->getParam('video_link');
			$this->mVideo->delVideo($video_link);
				try 
					{
						$httpClient = $this->_httpClient();
									   
						Zend_Loader::loadClass('Zend_Gdata_YouTube');
					 	$yt = new Zend_Gdata_YouTube($httpClient, 'NIW-App-1.0', '661085061264.apps.googleusercontent.com', 'AI39si4UPUxw1FE5hqSi0Z-B-5z3PIVovbBWKmqiMI3cXJ7lhvjJcABV-eqimb2EeSiuedWK8N9OGOdB1namX1CqqYki8jEfSQ');
						
						$video = $yt->getFullVideoEntry($input['video_link']);
		                $yt->delete($video);
				    }
				    catch (Exception $ex) {
				        echo $ex->getMessage();
				        exit;
				    }
			$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title = 'Sửa thông tin video';
			$video_link =  $this->_request->getParam('video_link');
			
			if($this->_request->isPost())
			{
				$input =  array(
								'video_link'		=> $video_link,
								'video_title'		=> $this->_request->getPost('video_title'),
								'video_description' => $this->_request->getPost('video_description'),
				);
				//echo $input['video_link'].' '.$input['video_title'].' '.$input['video_description'];die();
				$youtube  = new Zend_Gdata_YouTube();
				
				if($input['video_title'] !=null & $input['video_description']!=null)
				{
					$this->mVideo->editVideo($input);
					try 
					{
						$httpClient = $this->_httpClient();
									   
						Zend_Loader::loadClass('Zend_Gdata_YouTube');
					 	$yt = new Zend_Gdata_YouTube($httpClient, 'NIW-App-1.0', '661085061264.apps.googleusercontent.com', 'AI39si4UPUxw1FE5hqSi0Z-B-5z3PIVovbBWKmqiMI3cXJ7lhvjJcABV-eqimb2EeSiuedWK8N9OGOdB1namX1CqqYki8jEfSQ');
						
						$video = $yt->getFullVideoEntry($input['video_link']);
		                $putUrl = $video->getEditLink()->getHref(); 
						$video->setVideoTitle($input['video_title']);
						$video->setVideoDescription($input['video_description']);
		                $yt->updateEntry($video, $putUrl); 
				    }
				    catch (Exception $ex) {
				        echo $ex->getMessage();
				        exit;
				    }
					
					$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
				}
				else 
				{
					echo '<script type="text/javascript">alert("Vui lòng nhập đầy đủ thông tin !");</script>'; 
				}
			}
			
			$this->view->video = $this->mVideo->getVideoByVideoLink($video_link);
		}
		/*
		function getAuthSubRequestUrl()
		{
			//echo 'abc';die();
		    $next = 'http://niw.com.vn';
		    $scope = 'http://gdata.youtube.com';
		    $secure = false;
		    $session = true;
		    return Zend_Gdata_AuthSub::getAuthSubTokenUri($next, $scope, $secure, $session);
		}
		
		function getAuthSubHttpClient()
		{
			//echo 'abc';die();
		    if (!isset($_SESSION['sessionToken']) && !isset($_GET['token']) ){
		    	//echo 'abc';die();
		        echo '<a href="' . $this->getAuthSubRequestUrl() . '">Login!</a>';
				//echo 'abc';die();
		        return;
		    } else if (!isset($_SESSION['sessionToken']) && isset($_GET['token'])) {
		    	//echo 'abc';die();
		      $_SESSION['sessionToken'] = Zend_Gdata_AuthSub::getAuthSubSessionToken($_GET['token']);
		    }
		
		    $httpClient = Zend_Gdata_AuthSub::getHttpClient($_SESSION['sessionToken']);
		    return $httpClient;
		}
		 */
		 
	}
?>