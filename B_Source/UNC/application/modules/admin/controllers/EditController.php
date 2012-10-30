<?php
	class Admin_EditController extends Zend_Controller_Action
	{
		protected $mAdmin;
		protected $role;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		    $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		    Zend_Layout::startMvc ($option);
			$this->mAdmin = new Admin_Model_Madmin();
			@session_start();
			if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			else {
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$user_login = new Zend_Form_Element_Text('user_login');
			$user_login->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
			$user_pass = new Zend_Form_Element_Password('user_pass');
			$user_pass->setAttrib('renderPassword', true);
			$user_pass->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
			
			$user_fullname = new Zend_Form_Element_Text('user_fullname');
			$user_fullname->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên người dùng không được để trống'));
			
			$user_email = new Zend_Form_Element_Text('user_email');
			$user_email->addValidator('EmailAddress',true,array('messages'=>'Địa chỉ email không hợp lệ'));
			$user_email->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Email không được để trống'));
			
			$user_address = new Zend_Form_Element_Text('user_address');
			$user_address->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Địa chỉ không được để trống'));
			
			$user_login->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$user_pass->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_fullname->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_email->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_address->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($user_login,$user_pass,$user_fullname,$user_email,$user_address));
			return $form;
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
		
			$form = $this->setForm();
			$userid = $this->_request->getParam('userid');
			$info = $this->mAdmin->getUserByUserId($userid);
			
			if($this->role =="0")
			{
				$form->setAction($this->view->baseUrl().'/admin/edit/index/userid/'.$userid);
				$form->getElement('user_login')->setValue($info['user_login']);
				$form->getElement('user_pass')->setValue($info['user_pass']);
				$form->getElement('user_fullname')->setValue($info['user_fullname']);
				$form->getElement('user_email')->setValue($info['user_email']);
				$form->getElement('user_address')->setValue($info['user_address']);
				
				$this->view->form = $form;
				$this->view->title="Sửa thông tin quản trị viên";
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input = $this->_getInput($form);
						if($input['user_login'] == $info['user_login'])
						{
							if($this->mAdmin->editUser($userid, $input))
							{
								$_SESSION['success']='Cập nhật thành công';
							}
							else 
							{
								$_SESSION['failed']='Cập nhật không thành công';
							}
						}
						else 
						{
							if($this->mAdmin->isExitsUsername($input['user_login']))
							{
								$_SESSION['result']='Tên đăng nhập đã tồn tại !';

							}
							else 
							{
								if ($this->mAdmin->editUser($userid, $input))
								{
									$_SESSION['success']='Cập nhật thành công';
								}
								else 
								{
									$_SESSION['failed']='Cập nhật không thành công';
								}
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
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
		}
		
		function _getInput($form)
		{
			$input = array(
						'user_login' 	=> $form->getValue('user_login'),
						'user_pass'		=> $form->getValue('user_pass'),
						'user_fullname'	=> $form->getValue('user_fullname'),
						'user_email'	=> $form->getValue('user_email'),
						'user_address'	=> $form->getValue('user_address'),
			);
			return $input;
		}
	}
?>