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
		  $this->mAdmin = new Admin_Model_Madmin();
		  
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
		if ($this->mAdmin->isExistAccount($username,$password))
		{
			$_SESSION['user'] = $username;
			$_SESSION['role'] = $this->mAdmin->getRoleByUser($username);
			$this->_redirect($this->view->baseUrl().'/../admin/index/home');
		}
		else $this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	public function logoutAction()
	{
		unset($_SESSION['user']);
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