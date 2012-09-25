<?php
	class Admin_DanhmucController extends Zend_Controller_Action
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
			
			$mdanhmuc=new Admin_Model_Mdanhmuc;
			$this->view->list=$mdanhmuc->getListDM();
			$this->view->title="Quản lý danh mục";
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$mdanhmuc = new Admin_Model_Mdanhmuc;
			$this->view->list = $mdanhmuc->getListDM();
			$this->view->query = $mdanhmuc->getOne($this->getRequest()->getParam('id'));
			$this->view->title="Sửa thông tin danh mục";
			
			if($this->_request->isPost())
			{
				$data = array(
					'category_name' => $this->_request->getPost('category_name'),
					'category_parent_id' => $this->_request->getPost('category_parent_id'),
					'is_active' => $this->_request->getPost('is_active')
				);
						
				$mdanhmuc->edit($this->getRequest()->getParam('id'),$data);
				$this->_redirect($this->view->baseUrl().'/../admin/danhmuc');
			}
		}
		
		function addAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$mdanhmuc = new Admin_Model_Mdanhmuc;
			$this->view->list = $mdanhmuc->getListDM();
			$this->view->title="Thêm danh mục";
			
			//echo $this->_request->getPost('submit');die();
			if($this->_request->getPost('submit')!='Add new')
			{
				$data = array(
					'category_name' => $this->_request->getPost('category_name'),
					'category_parent_id' => $this->_request->getPost('category_parent_id'),
					'is_active' => $this->_request->getPost('is_active')
				);
				
				$mdanhmuc->add($data);
				$this->_redirect($this->view->baseUrl().'/../admin/danhmuc');
			}
		}
		
		function delAction()
		{
			$mdanhmuc = new Admin_Model_Mdanhmuc;
			$mdanhmuc->del($this->getRequest()->getParam('id'));
			$this->_redirect($this->view->baseUrl().'/../admin/danhmuc');
		}

	}
?>