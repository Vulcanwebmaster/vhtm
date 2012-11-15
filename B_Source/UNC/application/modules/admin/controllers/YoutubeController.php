<?php
	class Admin_YoutubeController extends Zend_Controller_Action
	{
		protected $mUser;
		protected $role;
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
				$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		      $this->mYoutube=new Admin_Model_Myoutube();
			  $this->role = $_SESSION['role'];
			  
			  if ($_SESSION['role']!=0)
			  	$this->_redirect($this->view->baseUrl().'/../admin');
		  	}
			else $this->_redirect($this->view->baseUrl().'/../admin');	 
		}
		
		function indexAction()
		{
			if($this->role =="0")
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$paginator = Zend_Paginator::factory($this->mYoutube->getListAccount());
	        	$paginator->setItemCountPerPage(25);        
	        	$currentPage = $this->_request->getParam('page',1);
	         	$paginator->setCurrentPageNumber($currentPage);
	        	$this->view->list=$paginator;
				$this->view->title="Danh sách tài khoản Youtube";
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}
		}
		
		function _getInput($form)
		{
			$input = array(
						'youtube_username' 	=> $form->getValue('youtube_username'),
						'password'		=> $form->getValue('password'),
						'youtube_gallery'	=> $form->getValue('youtube_gallery'),
						'is_selected'	=> $form->getValue('is_selected'),
			);
			return $input;
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$youtube_username = new Zend_Form_Element_Text('youtube_username');
			$youtube_username->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên tài khoản không được để trống'));
			
			$password = new Zend_Form_Element_Text('password');
			$password->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
			
			$youtube_gallery = new Zend_Form_Element_Text('youtube_gallery');
			$youtube_gallery->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên album không được để trống'));
			
			$is_selected = $form->createElement("select","is_selected",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "0" => "Không",
                                                                      "1" => "Có")));

			$youtube_username->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$password->removeDecorator('HtmlTag')->removeDecorator('Label');
			$youtube_gallery->removeDecorator('HtmlTag')->removeDecorator('Label');
			$is_selected->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElements(array($youtube_username,$password,$youtube_gallery,$is_selected));
			return $form;
		}
		
		function insertAction()
		{
			if($this->role =="0")
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$this->view->title="Thêm tài khoản Youtube";
				$form = $this->setForm();
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if($input['is_selected']=='1')
						{
							$listAccount = $this->mYoutube->getListAccount();
							foreach($listAccount as $list)
							{
								if($list['is_selected']=='1')
								{
									$this->mYoutube->updateSelected($list['youtube_id']);
								}
							}
						}
						
						if ($this->mYoutube->insertAccount($input))
						{
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/youtube');
						}
						else 
						{
							$_SESSION['result']='Thêm mới không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/youtube');
						}
						
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				
				$this->view->form=$form;
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}			
		}
		
		function editAction()
		{
			if($this->role =="0")
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$this->view->title="Sửa tài khoản Youtube";
				$form = $this->setForm();
				$id = $this->_request->getParam('id');
				$info = $this->mYoutube->getAccountById($id);
				
				$form->setAction($this->view->baseUrl().'/admin/youtube/edit/id/'.$id);
				$form->getElement('youtube_username')->setValue($info['youtube_username']);
				$form->getElement('password')->setValue($info['password']);
				$form->getElement('youtube_gallery')->setValue($info['youtube_gallery']);
				$form->getElement('is_selected')->setValue($info['is_selected']);
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if($input['is_selected']=='1')
						{
							$listAccount = $this->mYoutube->getListAccount();
							foreach($listAccount as $list)
							{
								if($list['is_selected']=='1')
								{
									$this->mYoutube->updateSelected($list['youtube_id']);
								}
							}
						}
						if ($this->mYoutube->editAccount($id,$input))
						{
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/youtube');
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/youtube');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				
				$this->view->form=$form;
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}			
		}
		
		function deleteAction()
		{
			if($this->role=="0")
			{
				$id=$this->_request->getParam('id');
				if ($this->mYoutube->deleteAccount($id))
					$_SESSION['result']='Xóa thành công';
				else $_SESSION['result']='Xóa không thành công';
				$this->_redirect($this->view->baseUrl().'/../admin/youtube');
			}
			else 
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/uploadvideo');
			}
		}
	}