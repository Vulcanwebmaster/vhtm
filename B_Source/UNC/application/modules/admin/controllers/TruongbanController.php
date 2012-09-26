<?php
	class Admin_TruongbanController extends Zend_Controller_Action
	{
		protected $mUser;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		      
		      session_start();
		      $this->mUser=new Admin_Model_Muser();
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$user_login = new Zend_Form_Element_Text('user_login');
			$user_login->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
			$user_pass = new Zend_Form_Element_Text('user_pass');
			$user_pass->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
			$user_fullname = new Zend_Form_Element_Text('user_fullname');
			$user_email = new Zend_Form_Element_Text('user_email');
			$user_address = new Zend_Form_Element_Text('user_address');
			
			$is_active = $form->createElement("select","is_active",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "0" => "Chưa kích hoạt",
                                                                      "1" => "Đã kích hoạt")));

			$user_login->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$user_pass->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_fullname->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_email->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_address->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($user_login,$user_pass,$user_fullname,$user_email,$user_address,$is_active));
			return $form;
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->list=$this->mUser->getListByRole('1');
			$this->view->title="Trưởng ban";
		}
		
		function _getInput($form)
		{
			$input = array(
						'user_login' 	=> $form->getValue('user_login'),
						'user_pass'		=> $form->getValue('user_pass'),
						'user_fullname'	=> $form->getValue('user_fullname'),
						'user_email'	=> $form->getValue('user_email'),
						'user_address'	=> $form->getValue('user_address'),
						'is_active'		=> $form->getValue('is_active'),
						'role_id'		=> '1'
			);
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm trưởng ban";
			$form = $this->setForm();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mUser->insertUser($input))
					{
						$_SESSION['result']='Thêm mới thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/truongban');
					}
					else 
					{
						$_SESSION['result']='Thêm mới không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/truongban');
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
			
			$form=$this->setForm();
			$userId=$this->_request->getParam('userid');
			$info=$this->mUser->getUserById($userId);
			
			$form->setAction($this->view->baseUrl().'/admin/truongban/edit/userid/'.$userId);
			$form->getElement('user_login')->setValue($info['user_login']);
			$form->getElement('user_pass')->setValue($info['user_pass']);
			$form->getElement('user_fullname')->setValue($info['user_fullname']);
			$form->getElement('user_email')->setValue($info['user_email']);
			$form->getElement('user_address')->setValue($info['user_address']);
			$form->getElement('is_active')->setValue($info['is_active']);
			$this->view->form=$form;
			$this->view->title="Sửa thông tin trưởng ban";
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mUser->editUser($id, $input))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/truongban');
					}
					else 
					{
						$_SESSION['result']='Thêm mới không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/truongban');
						//$this->view->error=$form->getMessage();
						//$this->view->form=$form;
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
			
		}

		function deleteAction()
		{
			$userid=$this->_request->getParam('userid');
			
			if ($this->mUser->deleteUser($userid))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/truongban');
		}
	}