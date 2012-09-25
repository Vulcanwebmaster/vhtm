<?php
	class Admin_TruongbanController extends Zend_Controller_Action
	{
		function init(){
			$layoutPath=APPLICATION_PATH.'/templates/admin';
			$option=array('layout'=>'index',
							'layoutPath'=>$layoutPath);
			Zend_Layout::startMvc($option);
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Trưởng ban";
		}
	}