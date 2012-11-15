<?php
class Admin_DatajsonController extends Zend_Controller_Action
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
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
		
		$this->_helper->ajaxContext ->addActionContext('tintuc-source', 'json')
									->setAutoJsonSerialization(false)
                       				->initContext('json');		  
	}	
	public function indexAction()
	{
		
	}
	
	public function tintucsourceAction()
	{
		$mTinTuc = new Admin_Model_Mtintuc();
		$this->view->list = $mTinTuc->getListNews();
	}
}