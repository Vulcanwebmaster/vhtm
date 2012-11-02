<?php
	class Admin_ImageController extends Zend_Controller_Action
	{
		protected $mImage,$mChuyenmuc;
		protected $role;
		function init()
		{
			@session_start();
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		    $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		    Zend_Layout::startMvc ( $option );
			$this->mImage = new Admin_Model_Mimage();
			$this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			$this->listParent = $this->mChuyenmuc->getListParent();
			$this->listChild = $this->mChuyenmuc->getListChild();
			if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			$paginator = Zend_Paginator::factory($this->mImage->getList());
	        $paginator->setItemCountPerPage(5);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
	        $this->view->list = $paginator;
			$this->view->title = "Quản lý hình ảnh";
			$this->view->role = $this->role;
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$image_name = new Zend_Form_Element_Text('image_name');
			$image_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên ảnh không được để trống'));
			
			$image_link = new Zend_Form_Element_Textarea('image_link');
			$image_link->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Hình ảnh không được để trống'));
			
			
			$is_active = new Zend_Form_Element_Radio('is_active');
			$is_active->setRequired(true)
					->setLabel('is_active')
					->setMultiOptions(array("1" => "Có","0" => "Không"));
																	  
			$image_name->removeDecorator('HtmlTag')->removeDecorator('Label');
			$image_link->removeDecorator('HtmlTag')->removeDecorator('Label');
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($image_name,$image_link,$is_active));
			return $form;
		}
		
		function _getInput($form)
		{
			$data = array(
						'image_name'	=> $form->getValue('image_name'),
						'image_link'    => $form->getValue('image_link'),
						'is_active'		=> $form->getValue('is_active')
			);
			return $data;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm ảnh";
			$form = $this->setForm();
			$this->view->listCategory = $this->mImage->getListCategoryImage();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input = $this->_getInput($form);
						if($this->mImage->insertImage($input))
						{
							$image_id = $this->mImage->getImageIdNewest();
							foreach($_POST['checkbox'] as $check)
							{
								$this->mImage->insertImageForCategory($image_id,$check);
							}
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/image');
						}
						else 
						{
							$_SESSION['result']='Thêm mới không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/image');
						}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
			
			$this->view->form=$form;			
		}

		function deleteAction()
		{
			$image_id = $this->_request->getParam('imageid');
			$this->mImage->delImageInCategory($image_id);
			if($this->mImage->delImage($image_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			$this->_redirect($this->view->baseUrl().'/../admin/image');
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form = $this->setForm();
			$image_id = $this->_request->getParam('imageid');
			$this->view->listAllImageCategory = $this->mImage->getListCategoryImage();
			$this->view->listImageCategory = $this->mImage->getListImageCategoryByImageId($image_id);
			
			$info = $this->mImage->getImageById($image_id);
			$form->setAction($this->view->baseUrl().'/admin/image/edit/imageid/'.$image_id);
			$form->getElement('image_name')->setValue($info['image_name']);
			$form->getElement('image_link')->setValue($info['image_link']);
			$form->getElement('is_active')->setValue($info['is_active']);
				
			$this->view->form = $form;
			$this->view->title = "Sửa thông tin hình ảnh";
				
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					//echo $image_id;die();
					$input = $this->_getInput($form);
					if($this->mImage->editImage($image_id, $input))
					{
						if($this->mImage->delManageCategoryByImageId($image_id))
						{
							//var_dump($_POST['checkbox']);die();
							foreach($_POST['checkbox'] as $check)
							{
								$this->mImage->insertImageForCategory($image_id,$check);
							}
						}
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/image');
					}
					else 
					{
						$_SESSION['result']='Cập nhật không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/image');
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
		}

	}
?>
