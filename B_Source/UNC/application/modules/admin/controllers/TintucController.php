<?php
	class Admin_TintucController extends Zend_Controller_Action
	{
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			/*$content=file_get_contents('http://www.tindachieu.com/news/2012/09/iran-canh-bao-the-chien-thu-iii-neu-bi-tan-cong.html');
			$start=strpos($content,'<!--end: postmeta-->');
			$end=strpos($content,'<div class="addthis_toolbox addthis_default_style "');
			$content=substr($content, $start, $end-$start).'</div>';
			$this->view->content=$content;*/
		}
		
		//========================================= TIN ĐA CHIỀU ==========================================
		function getlistlinkAction()
		{
			$webcontent=file_get_contents('http://www.tindachieu.com/news/category/xahoi');
			$pos=strpos($webcontent,'<div class="catseparator"></div>');
			var_dump($pos); die();
		}
	}