<?php
class Admin_IndexController extends Zend_Controller_Action
{
	protected $mAdmin;
	protected $role,$user_id;
	public function  init()
	{
	     	$layoutPath = APPLICATION_PATH  . '/templates/admin';
	     	$option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	    	Zend_Layout::startMvc ( $option );
	      	
	     	$this->mAdmin=new Admin_Model_Madmin();
	     	session_start();
			if(isset($_SESSION['role'])){
				$this->role = $_SESSION['role'];
				$this->view->role = $this->role;
			}
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

			$account=$this->mAdmin->getAccountByUser($username);
			$_SESSION['role_id']=$account['role_id'];
			$_SESSION['user']=$username;

			$_SESSION['role'] = $this->mAdmin->getRoleByUser($username);
			
			$_SESSION['user_id'] = $account['user_id'];
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
		
		$today=date('Y-m-d',time()+7*3600);
		$segments=explode('-', $today);
		
		if ($this->_request->isPost())
		{
			$month=$this->_request->getPost('month-selector');
			$year=$this->_request->getPost('year-selector');
		}
		else 
		{
			$month=$segments[1];
			$year=$segments[0];
		}
		$this->view->monthSelected=$month;
		$this->view->yearSelected=$year;
		if ($month>0)
			$this->view->countingCurrentMonth=$this->mAdmin->getCountingInMonth($month, $year);
		else 
		{
			$this->view->countingCurrentYear=$this->mAdmin->getCountingInYear($year);
		}
		$this->view->listYear=$this->mAdmin->getListYear();
	}
}
?>