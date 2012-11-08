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
						'is_active'		=> $form->getValue('is_active'),
						'category_id'	=> $form->getValue('category_id')
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
				if (!$form->isValid($_POST))
				{
					
					$form->populate($_POST);
				}
				else
				{
					$input=$this->_getInput($form);
					$checkbox ="";
					foreach($_POST['checkbox'] as $check)
					{
						//echo "$check + ';'";
						$checkbox = $checkbox.$check.',';
					}
					//die();
					$_SESSION['result']='Thêm mới thành công';
					//var_dump($checkbox);die();
					if($this->mImage->insertImage($input,$checkbox))
					{
						$_SESSION['result']='Thêm mới thành công';
					}
					else{
						$_SESSION['result']='Thêm mới không thành công';
					}
					$this->_redirect($this->view->baseUrl().'/../admin/image');					
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
			
			$info = $this->mImage->getImageById($image_id);
			$category_id = explode(",",$info['category_id']);
			//echo $category_id[0];die();
			//var_dump($info);die();
			//------- Truyền giá trị vào------------
			$form->setAction($this->view->baseUrl().'/admin/image/edit/imageid/'.$image_id);
			$form->getElement('image_name')->setValue($info['image_name']);
			$form->getElement('image_link')->setValue($info['image_link']);
			$form->getElement('is_active')->setValue($info['is_active']);
			
			//-------End Truyền giá trị vào------------	
			$this->view->form = $form;
			$this->view->title = "Sửa thông tin hình ảnh";
			//--- Vòng lặp mảng đã qua xử lý bỏ dấu ','
			
			$this->view->listCategory = $category_id;
			//---End Vòng lặp mảng đã qua xử lý bỏ dấu ','
			
			if($this->_request->isPost())
			{
				if (!$form->isValid($_POST))
				{
					$form->populate($_POST);
				}
				else
				{
					$id = $this->_request->getParam('imageid');
					$input = $this->_getInput($form);
					
					$checkbox = "";
					foreach($_POST['checkbox'] as $check)
					{
						$checkbox = $checkbox.$check.',';
					}
					$checkbox=','.$checkbox;
					if ($this->mImage->editImage($id, $input,$checkbox))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/image');
					}
					else 
					{
						$this->view->error=$form->getMessage();
						$this->view->form=$form;
					}
				}
			}
			$this->view->form=$form;
		}

	}
?>
