<?php
	class Admin_PhongvienController extends Zend_Controller_Action
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
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->list=$this->mUser->getListByRole('2');
			$this->view->title="Phóng viên";
		}
		
		function deleteAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$userid=$this->_request->getParam('userid');
			if ($this->mUser->deleteUser($userid))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
		}
		
		function setForm()
		{
			$form=new Zend_Form();
			$form->setMethod('post');
			$form->setName('insertForm');
			$form->setAction($this->view->baseUrl().'/admin/phongvien/insert');
			
			
			$form->addElement('text','user_login');
			$user_login=$form->getElement('user_login');
			$user_login->setOrder(1)->setRequired(true);
			$user_login->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_pass');
			$el=$form->getElement('user_pass');
			$el->setOrder(2)->setRequired(true);
			$el->setLabel('Tên đăng nhập');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_pass');
			$el=$form->getElement('user_pass');
			$el->setOrder(2)->setRequired(true);
			$el->setLabel('Mật khẩu');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_fullname');
			$el=$form->getElement('user_fullname');
			$el->setLabel('Họ tên');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_email');
			$el=$form->getElement('user_email');
			$el->setLabel('Email');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_address');
			$el=$form->getElement('user_address');
			$el->setLabel('Địa chỉ');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$el=$form->createElement("select","is_active",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "0" => "Chưa kích hoạt",
                                                                      "1" => "Đã kích hoạt")));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			return $form;
		}
		
		function _getInput($form)
		{
			$input=array('user_login'=>$form->getValue('user_login'),
						'user_pass'=>$form->getValue('user_pass'),
						'user_fullname'=>$form->getValue('user_fullname'),
						'user_email'=>$form->getValue('user_email'),
						'user_address'=>$form->getValue('user_address'),
						'is_active'=>$form->getValue('is_active'),
						'role_id'=>'2');
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm phóng viên";
			
			$form=$this->setForm();
			if (!$form->isValid($_POST))
			{
				$this->view->form=$this->setForm($form);
			}
			else
			{
				$input=$this->_getInput($form);
				if ($this->mUser->insertUser($input))
				{
					$_SESSION['result']='Thêm mới thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
				}
				else 
				{
					$this->view->error=$form->getMessage();
					$this->view->form=$form;
				}
			}
		}
		
		function editAction()
		{
			$this->view->title='Chỉnh sửa phóng viên';
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->setForm();
			if (!$form->isValid($_POST))
			{
				$userId=$this->_request->getParam('userid');
				$info=$this->mUser->getUserById($userId);
				
				$form->setAction($this->view->baseUrl().'/admin/phongvien/edit/userid/'.$userId);
				$form->getElement('user_login')->setValue($info['user_login']);
				$form->getElement('user_pass')->setValue($info['user_pass']);
				$form->getElement('user_fullname')->setValue($info['user_fullname']);
				$form->getElement('user_email')->setValue($info['user_email']);
				$form->getElement('user_address')->setValue($info['user_address']);
				$form->getElement('is_active')->setValue($info['is_active']);
				
				$this->view->form=$form;
			}
			else
			{
				$id=$this->_request->getParam('userid');
				$input=$this->_getInput($form);
				if ($this->mUser->editUser($id, $input))
				{
					$_SESSION['result']='Cập nhật thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
				}
				else 
				{
					$this->view->error=$form->getMessage();
					$this->view->form=$form;
				}
			}
		}
	}