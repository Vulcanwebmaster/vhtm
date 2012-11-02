<?php
	class Admin_DiachiController extends Zend_Controller_Action
	{
		protected $mDiachi;
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
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$list=$this->mDiachi->getListDiachi();
			//var_dump($list);die();
			$this->view->list = $list;
			//var_dump($list);die();
			$this->view->title = "Quản lý địa chỉ";
			$this->view->role = $this->role;
		}
		function _getInput($form)
		{
			$input = array(	
							'address'	=> $form->getValue('address'),
							'contact'			=> $form->getValue('contact'),
			);
			return $input;
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$address = new Zend_Form_Element_Text('address');
			$address->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Địa chỉ không được để trống'));
			$contact = new Zend_Form_Element_Text('contact');
			$contact->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Liên hệ không được để trống'));
																	  
			$address->removeDecorator('HtmlTag')->removeDecorator('Label');
			$contact->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($address,$contact));
			return $form;
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form = $this->setForm();
			$address = $this->_request->getParam('address');
			
			$info = $this->mDiachi->getListDiachibyAddress($address);
			$form->setAction($this->view->baseUrl().'/admin/image/edit/address/'.$address);
			$form->getElement('address')->setValue($info['address']);
			$form->getElement('contact')->setValue($info['contact']);
				
			$this->view->form = $form;
			$this->view->title = "Sửa thông tin địa chỉ";
				
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input = $this->_getInput($form);
					//var_dump($input);die();
					if($this->mDiachi->editDiachi($address, $input))
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
