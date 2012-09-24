<?php
class Admin_IndexController extends Zend_Controller_Action
{
	public function  init()
	{
	      $layoutPath = APPLICATION_PATH  . '/templates/admin';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
	}
	public function indexAction()
	{
		
	}
	
	public function homeAction()
	{
		$this->view->headTitle('UNC - Website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headscript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js',"text/javascript");
		$this->view->headscript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js',"text/javascript");
	}
}