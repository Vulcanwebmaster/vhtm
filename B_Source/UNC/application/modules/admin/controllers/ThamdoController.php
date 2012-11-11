<?php
	class Admin_ThamdoController extends Zend_Controller_Action
	{
		protected $mDiachi, $mTintuc, $mThamdo;
		protected $role;
		protected $user;
		protected $user_id;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mDiachi = new Admin_Model_Mdiachi();
			  $this->mTintuc = new Admin_Model_Mtintuc();
			  $this->mThamdo = new Admin_Model_Mthamdo();
			  @session_start();
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user_id']))
			 	 $this->user_id = $_SESSION['user_id'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  $_SESSION['backend_current_menu']="menu-quanlychung";
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			$paginator = Zend_Paginator::factory($this->mTintuc->getListAllThamdo());
	        $paginator->setItemCountPerPage(25);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
	        $this->view->list = $paginator;
			$this->view->title = "Quản lý thăm dò";
			$this->view->role = $this->role;
			$this->view->isshow=$this->mThamdo->getActiveIndex();
		}
		function _getInput($form)
		{
			$input = array(	
							'polls_id'	=> $form->getValue('polls_id'),
							'polls_content'	=> $form->getValue('polls_content'),
							'polls_status'	=> $form->getValue('type'),
			);
			return $input;
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$noidung = new Zend_Form_Element_Text('polls_content');
			$noidung->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung không được để trống'));
			$noidung->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$questionEnum=$this->mThamdo->countQuestion();
			if ($questionEnum==0)
				$selector=array("0"=>"Câu hỏi",
								"1"=>"Trả lời",);
			else $selector=array("1"=>"Trả lời");
			$type=$form->createElement("select", "type", array('multioptions'=>$selector));
			$type->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($noidung,$type));
			return $form;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');

			//$mquangcao = new Admin_Model_Mquangcao;
			//$this->view->listdm = $mquangcao->getListDM();
			$this->view->title="Thêm nội dung";
			$form = $this->setForm();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mTintuc->insertthamdo($input))
					{
						$_SESSION['result']='Thêm mới thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/thamdo');
					}
					else 
					{
						$_SESSION['result']='Thêm mới Thất bại';
						$this->_redirect($this->view->baseUrl().'/../admin/thamdo');
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
			
			$form = $this->setForm();
			$polls_id = $this->_request->getParam('pollsid');
			
			$info = $this->mTintuc->getListThamdobyid($polls_id);
			$form->setAction($this->view->baseUrl().'/admin/thamdo/edit/pollsid/'.$polls_id);
			$form->getElement('polls_content')->setValue($info['polls_content']);
			$form->getElement('type')->setValue($info['polls_status']);
			$this->view->type=$info['polls_status'];
				
			$this->view->form = $form;
			$this->view->title = "Sửa thông tin thăm dò";
				
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input = $this->_getInput($form);
					//var_dump($input);die();
					if($this->mTintuc->editThamdo($polls_id, $input))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/thamdo',array('prependBase' => false));
					}
					else 
					{
						$_SESSION['result']='Cập nhật không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/thamdo',array('prependBase' => false));
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
		}

		function deleteAction()
		{
			$polls_id = $this->_request->getParam('pollsid');
			if($this->mTintuc->deletethamdo($polls_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			$this->_redirect($this->view->baseUrl().'/../admin/thamdo',array('prependBase' => false));
		}
		
		function activeAction()
		{
			$value=$this->_request->getPost('isshow');
			$input=array("polls_content"=>$value);
			$this->mThamdo->updateActive($input);
			$this->_redirect($this->view->baseUrl().'/admin/thamdo',array('prependBase' => false));
		}
	}
