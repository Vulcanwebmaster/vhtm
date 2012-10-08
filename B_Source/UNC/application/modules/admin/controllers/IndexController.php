<?php
class Admin_IndexController extends Zend_Controller_Action
{
	protected $mAdmin;
	public function  init()
	{
	      $layoutPath = APPLICATION_PATH  . '/templates/admin';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
	      
	      session_start();		  
	}
	public function indexAction()
	{
		if (!isset($_SESSION['user']))
		{
			$this->_helper->layout()->disableLayout();
		}
		else $this->_redirect($this->view->baseUrl().'/../admin/index/home');
	}
	
	public function checkAction()
	{
		$username=$this->_request->getParam('username');
		$password=$this->_request->getParam('password');
		$mAdmin = new Admin_Model_Madmin;
		if ($mAdmin->isExistAccount($username,$password))
		{
			$account=$mAdmin->getAccountByUser($username);
			$_SESSION['role_id']=$account['role_id'];
			$_SESSION['user']=$username;
			$_SESSION['role'] = $mAdmin->getRoleByUser($username);
			
			$_SESSION['user_id']=$account['user_id'];
			$this->_redirect($this->view->baseUrl().'/../admin/index/home');
		}
		else $this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	public function logoutAction()
	{
		unset($_SESSION['user']);
		unset($_SESSION['role_id']);
		unset($_SESSION['user_id']);
		unset($_SESSION['role']);
		$this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	public function homeAction()
	{
		$this->view->headTitle('UNC - Website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js',"text/javascript");
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js',"text/javascript");
	}
}
?>