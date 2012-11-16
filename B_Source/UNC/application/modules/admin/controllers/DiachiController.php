<?php
	class Admin_DiachiController extends Zend_Controller_Action
	{
		protected $mDiachi;
		protected $role;
		protected $user;
		protected $user_id;
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mDiachi = new Admin_Model_Mdiachi();
			  
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
			  $_SESSION["backend_current_menu"]="menu-diachilienket";
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$list=$this->mDiachi->getListAllDiachi();
			$this->view->list = $list;
			$this->view->title = "Quản lý địa chỉ";
			$this->view->role = $this->role;
		}
		function _getInput($form)
		{
			$input = array(	
							'danhmuc'	=> $form->getValue('danhmuc'),
							'noidung'	=> $form->getValue('noidung'),
							'lienket'	=> $form->getValue('lienket'),
			);
			return $input;
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$danhmuc = new Zend_Form_Element_Text('danhmuc');
			$noidung = new Zend_Form_Element_Text('noidung');
			$noidung->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung không được để trống'));
			$lienket = new Zend_Form_Element_Text('lienket');
			$lienket->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Liên kết không được để trống'));
																	  
			$danhmuc->removeDecorator('HtmlTag')->removeDecorator('Label');
			$noidung->removeDecorator('HtmlTag')->removeDecorator('Label');
			$lienket->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($danhmuc,$noidung,$lienket));
			return $form;
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form = $this->setForm();
			$danhmuc = $this->_request->getParam('danhmuc');
			
			$info = $this->mDiachi->getListDiachibyAddress($danhmuc);
			$form->setAction($this->view->baseUrl().'/admin/diachi/edit/danhmuc/'.$danhmuc);
			$form->getElement('danhmuc')->setValue($info['danhmuc']);
			$form->getElement('noidung')->setValue($info['noidung']);
			$form->getElement('lienket')->setValue($info['lienket']);
				
			$this->view->form = $form;
			$this->view->title = "Sửa thông tin địa chỉ";
				
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input = $this->_getInput($form);
					//var_dump($input);die();
					if($this->mDiachi->editDiachi($danhmuc, $input))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/diachi');
					}
					else 
					{
						$_SESSION['result']='Cập nhật không thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/diachi');
					}
				}
				else 
				{
					$form->populate($_POST);
				}
			}
		}
	}
