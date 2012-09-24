<?php
class IndexController extends Zend_Controller_Action
{
	public function indexAction()
	{
		$form=$this->getSignupForm();
		$this->view->form=$form;
	}
	
	function getSignupForm()
	{
		$form= new Zend_Form();
		
		$form->setName('login_form');
		$form->setMethod('post');
		$form->setAction($this->view->baseUrl().'/default/index/login');
		
		$form->addElement('text','username');
		$username=$form->getElement('username');
		$username->addValidator(new Zend_Validate_NotEmpty());
		$username->setLabel('Tên đăng nhập');
		
		$form->addElement('password','pass');
		$pass=$form->getElement('pass');
		$pass->addValidator(new Zend_Validate_NotEmpty());
		$pass->setLabel('Mật khẩu');
		
		$form->addElement('submit','submit');
		$submit=$form->getElement('submit');
		$submit->setLabel('Đăng nhập');
		
		return $form;
	}
	
	public function loginAction()
	{
		$form=$this->getSignupForm();
		if ($form->isValid($_POST))
		{
			$user=$form->getValue('username');
			$pass=$form->getValue('pass');
			
			$mlogin=new Default_Model_Login();
			if (!$mlogin->isExist($user, $pass))
				$this->view->error="Tài khoản không tồn tại";
			else 
			{
				$this->getHelper('viewRenderer')->setNoRender();
				$this->indexAction();
			}
			$this->view->valid=$form->getMessages();
			$this->view->form=$form;
		}
		else 
		{
			$this->view->error=$form->getMessages();
			$this->view->form=$form;
		}
		/*if ($this->_request->isPost())
		{
			$user=$this->_request->getPost('username');
			$pass=$this->_request->getPost('pass');
			
			$mlogin=new Default_Model_Login();
			if (!$mlogin->isExist($user, $pass))
				$this->view->error="Tài khoản không tồn tại";
			else 
			{
				$this->getHelper('viewRenderer')->setNoRender();
				$this->indexAction();
			}
		}*/
	}
}