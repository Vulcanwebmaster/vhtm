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
			  $this->mVideo = new Admin_Model_Mvideo();
			  
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
		    $youtube  = new Zend_Gdata_YouTube();
		 
		    try {
		        $feed = $youtube->getUserUploads('unc811');
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
        		$paginator->setItemCountPerPage(5);        
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
							              $username = 'unc.video@gmail.com',
							              $password = 'khongcopass',
							              $service 	= 'youtube',
							              $client 	= null,
							              $source 	= 'NIWApp', // a short string identifying your application
							              $loginToken 	= null,
							              $loginCaptcha = null,
							              $authenticationURL
							           );
			return $httpClient;
		}
		
		function setForm()
		{
			$form = new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$link = new Zend_Form_Element_Text('link');
			$link ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Liên kết không được để trống'));
			
			$title = new Zend_Form_Element_Text('title');
			$title ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tiêu đề không được để trống'));
			
			$description = new Zend_Form_Element_Textarea('description');
			$description->setAttrib('rows', '5');
			$description->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mô tả không được để trống'));
			
			$title->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$description->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($title,$description));
			return $form;
			
		}
		
		function _getInput($form)
		{
			$input = array(
						'video_full_link'			=> $form->getValue('link'),
						'video_title'				=> $form->getValue('title'),
						'video_description'			=> $form->getValue('description')
						);
			return $input;
		}
		
		function updateAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->formInsert();
			$video_id=$this->_request->getParam('video_id');
			$info=$this->mVideo->getVideoById($video_id);
			
			$form->setAction($this->view->baseUrl().'/admin/uploadvideo/update/video_id/'.$video_id);
			$form->getElement('link')->setValue($info['video_full_link']);
			$form->getElement('title')->setValue($info['video_title']);
			$form->getElement('description')->setValue($info['video_description']);
			$this->view->form=$form;
			$this->view->title="Sửa thông tin video";
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mVideo->updateVideo($video_id,$input))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
					else 
					{
						$_SESSION['result']='Cập nhật không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
			
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form = $this->formInsert();
			$this->view->title = 'Thêm video mới';
			$this->view->form = $form;
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mVideo->insertVideoLink($input))
					{
						$_SESSION['result']='Thêm mới thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
					else 
					{
						$_SESSION['result']='Thêm mới không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
		}
		
		function formInsert()
		{
			$form = new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$link = new Zend_Form_Element_Text('link');
			$link ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Liên kết không được để trống'));
			
			$title = new Zend_Form_Element_Text('title');
			$title ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tiêu đề không được để trống'));
			
			$description = new Zend_Form_Element_Textarea('description');
			$description->setAttrib('rows', '5');
			$description->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mô tả không được để trống'));
			
			$link->removeDecorator('HtmlTag')->removeDecorator('Label');
			$title->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$description->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($link,$title,$description));
			return $form;
		}
		
		function uploadAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');

			$form = $this->setForm();
			$this->view->form = $form;
			
			if($this->_request->isPost())
			{	
				if($form->isValid($_POST))
				{
					$title =  $form->getValue('title');
					$description = $form->getValue('description');
					
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
						
						if(file_exists($destination))
							unlink($destination);
						echo '<script type="text/javascript">alert("Video đang được upload trên YOUTUBE !");</script>';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
					}
					else echo '<script type="text/javascript">alert("Vui lòng chọn file !");</script>';
				}
				else 
				{
					$form->populate($_POST);
				}
				
			}
			$this->view->title = 'Tải lên video';
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
						
						$video = $yt->getFullVideoEntry($video_link);
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
			
			$video_link =  $this->_request->getParam('video_link');
			$info = $this->mVideo->getVideoByVideoLink($video_link);
			
			$form = $this->formInsert();
			$form->setAction($this->view->baseUrl().'/admin/uploadvideo/edit/video_link/'.$video_link);
			
			$form->getElement('link')->setValue($info['video_full_link']);
			$form->getElement('title')->setValue($info['video_title']);
			$form->getElement('description')->setValue($info['video_description']);
			
			$this->view->form = $form;
			$this->view->title = 'Sửa thông tin video';			
			
			if($this->_request->isPost())
			{				
				if($form->isValid($_POST))
				{
					$input = array(
							'video_link'			=> $this->_request->getParam('video_link'),
							'video_title'			=> $form->getValue('title'),
							'video_description'		=> $form->getValue('description'),
							
					);

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
						$this->mVideo->editVideo($input); 
				    }
				    catch (Exception $ex) {
				        echo $ex->getMessage();
				        exit;
				    }
				    
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
				
				}
				else 
				{
					$form->populate($_POST); 
				}
			}
		}
		 
	}