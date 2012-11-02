<?php
	class Admin_UploadvideoController extends Zend_Controller_Action
	{
		protected $mVideo;
		protected $mYoutube;
		protected $user_youtube,$pass_youtube,$gallery,$id_youtube;
		protected $role;
		protected $user_login;
		protected $user_id;
		
		function init()
		{
			  $layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		      @session_start();
			  $this->mVideo = new Admin_Model_Mvideo();
			  $this->mYoutube = new Admin_Model_Myoutube();
			  $account = $this->mYoutube->getAccountSelected();
			  //var_dump($account);die();
			  $this->id_youtube = $account['youtube_id'];
			  $this->user_youtube = $account['youtube_username'];
			  $this->pass_youtube = $account['password'];
			  $this->gallery = $account['youtube_gallery'];
			  
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user']))
			 	 $this->user_login = $_SESSION['user'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  
			  if(isset($_SESSION['user_id']))
			  	$this->user_id = $_SESSION['user_id'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
		}
		
		function _httpClient()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
												   
			$youtube = new Zend_Gdata_YouTube();

			$authenticationURL= 'https://www.google.com/accounts/ClientLogin';
			Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
			$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
							              $username = $this->user_youtube,
							              $password = $this->pass_youtube,
							              $service 	= 'youtube',
							              $client 	= null,
							              $source 	= 'NIWApp', 
							              $loginToken 	= null,
							              $loginCaptcha = null,
							              $authenticationURL
							           );
			return $httpClient;
		}
		
		function indexAction()
		{
			//echo $this->user_login;die();
			//echo $this->user_youtube.' - '.$this->pass_youtube.' - '.$this->gallery;
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$youtube  = new Zend_Gdata_YouTube();
		 
		    try {
		        $feed = $youtube->getUserUploads($this->gallery);
				foreach ($feed as $video)
				 	{
				 		$video_link = $video->getVideoId();
				 		if($this->mVideo->exitsVideo($video_link)==false)
						{
							$input = array(
											'video_title'		=> $video->getVideoTitle(),
											'video_alias'		=> $this->getAliasByName($video->getVideoTitle()),
											'video_description' => $video->getVideoDescription(),
											'video_link'		=> $video_link,
											'user_upload'		=> $this->user_login
							);
							//var_dump($input);die();
							$this->mVideo->insertVideo($input,$this->id_youtube);
						}
					}
		    }
		    catch (Exception $ex) {
		        echo $ex->getMessage();
		        exit;
		    }
			
			if($this->role == "0" | $this->role == "2")
			{
				$listVideo = $this->mVideo->getListVideo();
			}
			if($this->role == "1")
			{
				$allVideo = $this->mVideo->getListVideo();
				$listCategoryId = $this->mVideo->getCategoryIdByUserId($this->user_id);
				$listVideo = array();
				foreach($allVideo as $video)
				{
					foreach($listCategoryId as $categoryId)
					{
						if($video['category_id'] == $categoryId['category_id'])
						{
							$listVideo[] = $video;
						}
					}
				}
			}
			//var_dump($listVideo);die();
			$paginator = Zend_Paginator::factory($listVideo);
        	$paginator->setItemCountPerPage(5);        
        	$currentPage = $this->_request->getParam('page',1);
         	$paginator->setCurrentPageNumber($currentPage);
			
			//var_dump($this->mVideo->getListVideo());die();
        	$this->view->list = $paginator;
			$this->view->title = 'Quản lý video';
			
			$this->view->role = $this->role;
			$this->view->user_login = $this->user_login;
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
			$description->setAttrib('rows', '10');
			$description->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mô tả không được để trống'));
			
			$title->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$description->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($title,$description));
			return $form;
			
		}
		
		function _getInput($form,$listCategoryId)
		{
			$input = array(
						'video_full_link'			=> $form->getValue('link'),
						'video_title'				=> $form->getValue('title'),
						'video_alias'				=> $this->getAliasByName($form->getValue('title')),
						'video_description'			=> $form->getValue('description'),
						'is_active'					=> $form->getValue('is_active'),
						'user_upload'				=> $this->user_login,
						'category_id'				=> $listCategoryId,
						);
			return $input;
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
			$this->view->role = $this->role;
			$this->view->listCategory = $this->mVideo->getListVideoCategory();
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$listCategoryId = "";
					foreach($_POST['checkbox'] as $check)
					{
						if($listCategoryId == "")
									$listCategoryId = $check;
						else $listCategoryId = $listCategoryId.','.$check;
					}
					$listCategoryId = str_replace("", "", $listCategoryId);
					$input = $this->_getInput($form,$listCategoryId);
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
			
			$is_active = $form->createElement("radio","is_active",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "1" => "Có",
            	                                                      "0" => "Không")));
			if($this->role == "0")
			{
				$listCategoryId = $this->mVideo->getListCategory();
			}
			else 
			{
				$listCategoryId = $this->mVideo->getCategoryIdByUserId($this->user_id);
			}
			
			
			$listCategory = array();
			foreach($listCategoryId as $category)
			{
				$listCategory[] = $this->mVideo->getCategoryByCategoryId($category['category_id']);
			}			
			$categoryId = new Zend_Form_Element_Select('category_id');
			
			foreach($listCategory as $category)
			{
				$categoryId->addMultiOption($category['category_id'],$category['category_name']);
			}
			
			$link->removeDecorator('HtmlTag')->removeDecorator('Label');
			$title->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$description->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$categoryId->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($link,$title,$description,$is_active,$categoryId));
			return $form;
		}
		
		function uploadAction()
		{
			//echo $this->user.' - '.$this->pass.' - '.$this->gallery;
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
					$title =  $this->_request->getPost('title');
					$description = $this->_request->getPost('description');
					//echo $title.$description;die();
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
						
						echo '<script type="text/javascript">
							alert("Video đang được upload trên YOUTUBE !");
						</script>';
						$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
						
						//
					}
					else echo '<script type="text/javascript">alert("Vui lòng chọn file !");</script>';
				}
				
			//}
			$this->view->title = 'Tải lên video';
			}
		}
		
		function delAction()
		{
			$video = $this->mVideo->getVideoById($video_id);
			if($this->role == "0" | ($this->user_login == $video['user_upload']))
			{
				$video_id = $this->_request->getParam('video_id');
				$video_link = $video['video_link'];
				$youtube_id = $video['youtube_id'];
				$account = $this->mVideo->getAccountByYoutubeId($youtube_id);
				$user = $account['youtube_username'];
				$pass = $account['password'];
				$this->mVideo->delVideo($video_id);
				if($video_link != null)
				{
					try 
						{
							$authenticationURL= 'https://www.google.com/accounts/ClientLogin';
							Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
							$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
											              $username = $user,
											              $password = $pass,
											              $service 	= 'youtube',
											              $client 	= null,
											              $source 	= 'NIWApp', 
											              $loginToken 	= null,
											              $loginCaptcha = null,
											              $authenticationURL
											           );
										   
							Zend_Loader::loadClass('Zend_Gdata_YouTube');
						 	$yt = new Zend_Gdata_YouTube($httpClient, 'NIW-App-1.0', '661085061264.apps.googleusercontent.com', 'AI39si4UPUxw1FE5hqSi0Z-B-5z3PIVovbBWKmqiMI3cXJ7lhvjJcABV-eqimb2EeSiuedWK8N9OGOdB1namX1CqqYki8jEfSQ');
							
							$video = $yt->getFullVideoEntry($video_link);
			                $yt->delete($video);
					    }
					    catch (Exception $ex) {
					        echo $ex->getMessage();
					        exit;
					    }
				}
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền xóa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$video_id = $this->_request->getParam('video_id');
			$video_link = $this->mVideo->getVideoLinkById($video_id);
			$this->view->role = $this->role;
			$info = $this->mVideo->getVideoById($video_id);
			$form = $this->formInsert();
			$this->view->listCategoryId = explode(",", $info['category_id']);
			$this->view->listCategory = $this->mVideo->getListVideoCategory();
			
			if($this->role=="0" | ($this->role=="1" & $this->user_login==$info['user_upload']))
			{
				$form->setAction($this->view->baseUrl().'/admin/uploadvideo/edit/video_id/'.$video_id);
				
				$form->getElement('link')->setValue($info['video_full_link']);
				$form->getElement('title')->setValue($info['video_title']);
				$form->getElement('description')->setValue($info['video_description']);
				$form->getElement('is_active')->setValue($info['is_active']);
				
				$this->view->form = $form;
				$this->view->title = 'Sửa thông tin video';		
				
				if($this->_request->isPost())
				{
					$listCategoryId = "";
					foreach($_POST['checkbox'] as $check)
					{
						if($listCategoryId == "")
									$listCategoryId = $check;
						else $listCategoryId = $listCategoryId.','.$check;
					}
					$listCategoryId = str_replace("", "", $listCategoryId);
									
					if($form->isValid($_POST))
					{
						if($video_link != null)
						{
							$input = array(
								'video_link'			=> $video_link,
								'video_title'			=> $form->getValue('title'),
								'video_description'		=> $form->getValue('description'),
								'is_active'				=> $form->getValue('is_active'),
								'category_id'			=> $listCategoryId
							);	
							
							if($this->mVideo->editVideo($input))
							{
								$_SESSION['result']='Cập nhật thành công';
							}
							
							$youtube_id = $this->mVideo->getYouTubeIdByVideoId($video_id);
							$account = $this->mVideo->getAccountByYoutubeId($youtube_id);
							$user = $account['youtube_username'];
							$pass = $account['password'];
							
							try 
							{
								$authenticationURL= 'https://www.google.com/accounts/ClientLogin';
								Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
								$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
												              $username = $user,
												              $password = $pass,
												              $service 	= 'youtube',
												              $client 	= null,
												              $source 	= 'NIWApp', 
												              $loginToken 	= null,
												              $loginCaptcha = null,
												              $authenticationURL
												           );
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
							$input = $this->_getInput($form,$listCategoryId);
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
					}
					else 
					{
						$form->populate($_POST); 
					}
				}
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}
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

		function uploadvideo()
		{
			
		}
		 
	}