<?php
class Admin_QuangcaoController extends Zend_Controller_Action{
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
			
			$mquangcao=new Admin_Model_Mquangcao;
			$this->view->list=$mquangcao->getListQC();
			$this->view->title="Quản lý mục quảng cáo";
		}
		
		function addAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$mquangcao = new Admin_Model_Mquangcao;
			$this->view->list = $mquangcao->getListQC();
			$this->view->title="Thêm quảng cáo";
			
			if($this->_request->getPost('submit')!='Add new')
			{
				$data = array(
					'ads_banner' => $this->_request->getPost('ads_banner'),
					'ads_position' => $this->_request->getPost('ads_position'),
					'ads_name' => $this->_request->getPost('ads_name'),
					'ads_link' => $this->_request->getPost('ads_link'),
					'ads_start_date' => $this->_request->getPost('ads_start_date'),
					'ads_end_date' => $this->_request->getPost('ads_end_date'),
				);
				
				$mquangcao->add($data);
				$this->_redirect($this->view->baseUrl().'/../admin/quangcao');
			}
		}

		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$mquangcao = new Admin_Model_Mquangcao;
			$this->view->list = $mquangcao->getListQC();
			$this->view->query = $mquangcao->getOne($this->getRequest()->getParam('id'));
			$this->view->title="Sửa thông tin quảng cáo";
			
			if($this->_request->isPost())
			{
				$data = array(
					'ads_banner' => $this->_request->getPost('ads_banner'),
					'ads_position' => $this->_request->getPost('ads_position'),
					'ads_name' => $this->_request->getPost('ads_name'),
					'ads_link' => $this->_request->getPost('ads_link'),
					'ads_start_date' => $this->_request->getPost('ads_start_date'),
					'ads_end_date' => $this->_request->getPost('ads_end_date'),
				);
						
				$mquangcao->edit($this->getRequest()->getParam('id'),$data);
				$this->_redirect($this->view->baseUrl().'/../admin/quangcao');
			}
		}

		function delAction()
		{
			$mquangcao = new Admin_Model_Mquangcao;
			$mquangcao->del($this->getRequest()->getParam('id'));
			$this->_redirect($this->view->baseUrl().'/../admin/quangcao');
		}	
		
}
?>