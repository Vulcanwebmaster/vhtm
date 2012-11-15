<?php
	class Admin_VideoController extends Zend_Controller_Action
	{
		protected $mVideo,$_upload,$user;
		
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mVideo = new Admin_Model_MvideoUNC();
			  if(isset($_SESSION['user']))
			 	 $this->user = $_SESSION['user'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin',array('prependBase' => false));
			  }
			 $this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			$_SESSION["backend_current_menu"]="menu-quanlyvideo";	
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');	 
		}
		
		function indexAction()
		{
			$paginator = Zend_Paginator::factory($this->mVideo->getList());
	        $paginator->setItemCountPerPage(25);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
	        $this->view->list = $paginator;
			$this->view->title = "Quản lý video UNC";
		}
		
		function setForm()
		{
			$form = new Zend_Form;
			$form->setMethod('post')->setAction('');
			//$this->setAttrib('enctype','multipart/form-data');
			
			$file = new Zend_Form_Element_File('video_file');
			//$file->setAttrib('class','file');
			$file->setLabel('video_file');
           	$file->setRequired(true);
           	
			$video_title = new Zend_Form_Element_Text('video_title');
			$video_title ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tiêu đề không được để trống'));
			
			$video_thumbnail=new Zend_Form_Element_Textarea('video_thumbnail');
			$video_thumbnail->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$video_description = new Zend_Form_Element_Textarea('video_description');
			$video_description->setAttrib('rows','7');
			$video_description ->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mô tả không được để trống'));
			
			$is_active = new Zend_Form_Element_Radio('is_active');
			$is_active->setRequired(true)
					->setLabel('is_active')
					->setMultiOptions(array("1" => "Có","0" => "Không"));
			
			$file->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$video_title->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$video_description->removeDecorator('HtmlTag')->removeDecorator('Label');
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');		
			
			$form->addElements(array($file,$video_title,$video_description,$is_active,$video_thumbnail));
			return $form;
		}
		
		function _getInput($form,$newFileName,$listCategoryId)
		{
			$link = $this->view->baseUrl().'/video/'.$newFileName;
			$link = str_replace('\\', '/', $link);
			
			$input = array(
										'video_title' 		=> $form->getValue('video_title'),
										'video_alias'		=> $this->getAliasByName($form->getValue('video_title')),
										'video_description' => $form->getValue('video_description'),
										'video_link'		=> $link,
										'user_upload'		=> $this->user,
										'thumbnail'			=> $form->getValue('video_thumbnail'),
										'is_active'			=> $this->_request->getPost('is_active'),
										
										'category_id'		=> $listCategoryId
										
								);
			return $input;
		}
		
		function uploadAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form = $this->setForm();
			$this->view->title = 'Tải lên video';
			$this->view->listCategory = $this->mVideo->getListVideoCategory();
			$this->view->form = $form;
			$this->_upload = new Zend_File_Transfer_Adapter_Http();
        	$this->_upload->setDestination(APPLICATION_PATH.'/../video/');
			$this->_upload->addValidator('Extension', false, array('swf','mp4', 'flv'));
			$this->_upload->addValidator('FilesSize',false,array('min' => '10kB', 'max' => '100MB'));
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$file = $this->_upload->getFileInfo();
					$file_name = $file['video_file']['name'];
					if($this->_upload->isValid())
					{
						preg_match('#\.([^\.]+)$#',$file_name,$matches);
						$fileExtension  = $matches[1];
						$newFileName  = "file_" . time() . '.' . $fileExtension;
						$options = array('target' => APPLICATION_PATH.'/../video/' . $newFileName,'overwrite'=>true);
	   					$this->_upload->addFilter('Rename',$options,$file_name);
					 	if($this->_upload->receive($file_name))
						{
							//gọi biến checkbox
							$listCategoryId = "";
							foreach($_POST['checkbox'] as $check)
							{
								if($listCategoryId == "")
									$listCategoryId = $check;
								else $listCategoryId = $listCategoryId.','.$check;
							}
							$listCategoryId = str_replace("", "", $listCategoryId);
							$input = $this->_getInput($form,$newFileName,$listCategoryId);
							//var_dump($input);die();
							
							if($this->mVideo->insertVideo($input)){
								$_SESSION['result']='Upload thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/video');
							}else{
								$_SESSION['result']='Upload không thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/video');
							}
						}
					}
					else echo '<script>
						alert("Kích thước file vượt quá giới hạn hoặc định dạng file không phù hợp !");
					</script>';
				}
				else 
				{
					$form->populate($_POST);
				}
			}
		}

		function editAction()
		{
			if ($_SESSION['role_id']!=0)
			{
				$this->_redirect($this->view->baseUrl().'/../admin/video');
			}
			else 
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$videoId = $this->_request->getParam('videoid');
				$form = $this->setForm();
				$this->view->title = 'Sửa thông tin video';
				$video = $this->mVideo->getVideoById($videoId);
				$this->view->video = $video;
				$this->view->listCategory = $this->mVideo->getListVideoCategory();
				$this->view->listCategoryId =  explode(",", $video['category_id']);
				
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
					
					$input = array(
									'video_id'			=> $videoId,
									'video_title'		=> $this->_request->getPost('video_title'),
									'video_alias'		=> $this->getAliasByName($this->_request->getPost('video_title')),
									'video_description'	=> $this->_request->getPost('video_description'),
									'thumbnail'			=> $this->_request->getPost('video_thumbnail'),
									'is_active'			=> $this->_request->getPost('is_active'),
									'category_id'		=> $listCategoryId
					);
					
					if(trim($input['video_title']) != "" | trim($input['video_title']) != "")
					{
						
						if($this->mVideo->editVideo($input)){
							$_SESSION['result']='Cập nhật thành công';
						}else{
							$_SESSION['result']='Cập nhật không thành công';
						}
						$this->_redirect($this->view->baseUrl().'/../admin/video');
					}
					else{
						echo '<script>
							alert("Vui lòng nhập đầy đủ thông tin !");
						</script>';
					}
				}
				$this->view->form = $form;
			}
		}

		function delAction()
		{
			if ($_SESSION['role_id']!=0)
			{
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
			else 
			{
				$videoId = $this->_request->getParam('videoid');
				$video = $this->mVideo->getVideoById($videoId);
				if($this->mVideo->delVideo($videoId))
				{
					if(file_exists($video['video_link']))
						@unlink($video['video_link']);
					$_SESSION['result']='Xóa video thành công';
					$this->_redirect($this->view->baseUrl().'/admin/video',array('prependBase' => false));
				}
			}
		}
	}
?>