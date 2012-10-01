<?php
class Admin_QuangcaoController extends Zend_Controller_Action{
	
		protected $mquangcao;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mquangcao=new Admin_Model_Mquangcao();
		}
		
		function setForm()
		{
			
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$ads_banner = new Zend_Form_Element_Text('ads_banner');
			$ads_banner->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Biểu ngữ không được để trống'));
			
			$ads_position = new Zend_Form_Element_Text('ads_position');
			$ads_position->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vị trí không được để trống'));
			
			$ads_name = new Zend_Form_Element_Text('ads_name');
			$ads_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên quảng cáo không được để trống'));
			
			$ads_link = new Zend_Form_Element_Text('ads_link');
			$ads_link->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Đường dẫn không được để trống'));
			
			$ads_banner->removeDecorator('HtmlTag')->removeDecorator('Label');
			$ads_position->removeDecorator('HtmlTag')->removeDecorator('Label');
			$ads_name->removeDecorator('HtmlTag')->removeDecorator('Label');
			$ads_link->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($ads_banner,$ads_position,$ads_name,$ads_link));
			return $form;
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
		
		function _getInput($form)
		{
			$input = array(
					'ads_banner' => $this->_request->getPost('ads_banner'),
					'ads_position' => $this->_request->getPost('ads_position'),
					'ads_name' => $this->_request->getPost('ads_name'),
					'ads_link' => $this->_request->getPost('ads_link'),
					'ads_start_date' => $this->_request->getPost('ads_start_date'),
					'ads_end_date' => $this->_request->getPost('ads_end_date'),
					'category_id' => $this->_request->getPost('category_id'),
			);
			return $input;
		}
		
		function addAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');

			$mquangcao = new Admin_Model_Mquangcao;
			$this->view->list = $mquangcao->getListQC();
			$this->view->listdm = $mquangcao->getListDM();
			$this->view->title="Thêm quảng cáo";
			$form = $this->setForm();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mquangcao->add($input))
					{
						$_SESSION['result']='Thêm mới thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/quangcao');
					}
					else 
					{
						$_SESSION['result']='Thêm mới Thất bại';
						$this->_redirect($this->view->baseUrl().'/../admin/quangcao');
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
			
			$this->view->form=$form;
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