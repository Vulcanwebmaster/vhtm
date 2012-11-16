<?php
	class Admin_VideocategoryController extends Zend_Controller_Action
	{
		protected $mChuyenmuc,$user,$role;
		
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
				$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mChuyenmuc = new Admin_Model_Mvideocategory();
			  $_SESSION["backend_current_menu"]="menu-quanlyvideo";
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$category_name = new Zend_Form_Element_Text('category_name');
			$category_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên chuyên mục không được để trống'));
			
			$is_active= new Zend_Form_Element_Radio('is_active');
			$is_active->setRequired(true)
				->setLabel('Are you sure?')
				->setMultiOptions(array(
                                                                      "1" => "Có",
                                                                      "0" => "Không"));
			
			$category_name->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($category_name,$is_active));
			return $form;
		}
		
		function indexAction()
		{
			
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
	        	$this->view->list = $this->mChuyenmuc->getListCM();
				$this->view->title="Quản lý chuyên mục Video";
				$this->view->role = $this->role;
		}
		
		function _getInput($form)
		{
			$input = array(
						'category_name' 		=> $form->getValue('category_name'),
						'alias' 				=> $this->getAliasByName($form->getValue('category_name')),
						'is_active'				=> $form->getValue('is_active'),
			);
			return $input;
		}
		
		function insertAction()
		{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$this->view->title = "Thêm chuyên mục";
				$form = $this->setForm();
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input = $this->_getInput($form);
						if ($this->mChuyenmuc->insertCm($input))
						{
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/videocategory');
						}
						else 
						{
							$_SESSION['result']='Thêm mới không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/videocategory');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				
				$this->view->form=$form;
		}
		
		function editAction()
		{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$category_id = $this->_request->getParam('category_id');
				$info = $this->mChuyenmuc->getCmById($category_id);
				
				//Nếu là chuyên mục cha thì chỉ lấy ra các danh mục cha khác
				$form = $this->setForm();
				
				$form->setAction($this->view->baseUrl().'/admin/videocategory/edit/category_id/'.$category_id);
				$form->getElement('category_name')->setValue($info['category_name']);
				$form->getElement('is_active')->setValue($info['is_active']);
				
				$this->view->form = $form;
				$this->view->title="Sửa thông tin chuyên mục";
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if ($this->mChuyenmuc->editCm($category_id, $input))
						{
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/videocategory');
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/videocategory');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
		}
	}
