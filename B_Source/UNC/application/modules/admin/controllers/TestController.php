<?php
class Admin_TestController extends Zend_Controller_Action
{
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/admin';
	    $option = array ('layout' => 'index', 
	    	             'layoutPath' => $layoutPath );
	    Zend_Layout::startMvc ( $option );
		$this->mDanhmuc = new Admin_Model_Mdanhmuc();
		@session_start();
		$this->view->headTitle('UNC - Admin website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/smoothness/jquery-ui-1.8.23.custom.css');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/datatable/demo_table_jui.css');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/datatable/demo_table.css');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery.dataTables.js','text/javascript');		
		  
	}	
	public function indexAction()
	{
		
	}
	public function listTinTucAction()
	{
		
	}
}