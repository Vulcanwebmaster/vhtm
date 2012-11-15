<?php
	class Admin_ChuyenmucController extends Zend_Controller_Action
	{
		protected $mChuyenmuc,$mUser,$user,$role;
		
		function init()
		{
			@session_start();
			
			if (isset($_SESSION['role_id']))
			{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			  $this->mUser=new Admin_Model_Muser();
			  
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user']))
			 	 $this->user = $_SESSION['user'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  $_SESSION["backend_current_menu"]="menu-quanlytin";
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function setForm($check,$id)
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$category_name = new Zend_Form_Element_Text('category_name');
			$category_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên chuyên mục không được để trống'));
			
			$category_parent_id = new Zend_Form_Element_Select('category_parent_id');
			$category_parent_id->addMultiOption('0', '');
			
			if($check==1)
			{
				$list = $this->mChuyenmuc->getListParentSubOne($id);
			}
			else 
			{
				$list = $this->mChuyenmuc->getListCmParent();
			}
			foreach($list as $item)
			{
				$category_parent_id->addMultiOption($item['category_id'],$item['category_name']);
			}
			
			$is_active= new Zend_Form_Element_Radio('is_active');
			$is_active->setRequired(true)
				->setLabel('Are you sure?')
				->setMultiOptions(array(
                                                                      "1" => "Có",
                                                                      "0" => "Không"));
			
			$category_name->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$category_parent_id->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($category_name,$category_parent_id,$is_active));
			return $form;
		}
		
		function indexAction()
		{
			
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$paginator = Zend_Paginator::factory($this->mChuyenmuc->getListCM());
	        	$paginator->setItemCountPerPage(25);        
	        	$currentPage = $this->_request->getParam('page',1);
	         	$paginator->setCurrentPageNumber($currentPage);
	        	$this->view->list = $paginator;
				$this->view->title="Quản lý chuyên mục";
				$this->view->role = $this->role;
				
				$listParent=array();
				foreach($paginator as $parent)
				{
					if($parent['category_parent_id']!='0')
					{
						$query = $this->mChuyenmuc->getCategoryNameById($parent['category_parent_id']);
						$listParent[] = $query['category_name'];
					}
					else
					{
						$listParent[] = '0';
					}
				}
				$this->view->listParent = $listParent;
		}
		
		function _getInput($form)
		{
			$input = array(
						'category_name' 		=> $form->getValue('category_name'),
						'alias' 				=> $this->getAliasByName($form->getValue('category_name')),
						'category_parent_id'	=> $form->getValue('category_parent_id'),
						'is_active'				=> $form->getValue('is_active'),
			);
			return $input;
		}
		
		function insertAction()
		{
			if($this->role == "0")
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$this->view->title = "Thêm chuyên mục";
				$this->view->list = $this->mChuyenmuc->getListCmParent();
				$form = $this->setForm(0,0);
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if ($this->mChuyenmuc->insertCm($input))
						{
							$newestId=$this->mChuyenmuc->getLastCategoryId();
							$parent_id=$input['category_parent_id'];
							
							$listUser=$this->mUser->getListAll();
							foreach ($listUser as $subUser)
							{
								if ($parent_id!=0)
								{
									$listChild=$this->mChuyenmuc->getListChildByParentId($parent_id);
									if (count($listChild)>0)
									{
										
											$firstUserId=$subUser['user_id'];
											$count=0;
											foreach ($listChild as $child)
											{
												if ($this->mChuyenmuc->getUserByCategoryIdUserId($child['category_id'],$firstUserId))
													$count++;
											}
											if ($count==count($listChild)-1)
											{
												$userId=$firstUserId;
											}
											else $userId=false;
									}
									else 
									{
										$userId=$this->mChuyenmuc->getUserByCategoryId($parent_id);
									}
									if ($userId)
									{
										$this->mChuyenmuc->insertUserForCategory($userId,$newestId);
									}
								}
							}
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
						}
						else 
						{
							$_SESSION['result']='Thêm mới không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				
				$this->view->form=$form;
			}
			else{
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
		}
		
		function editAction()
		{
			if($this->role == "0")
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$category_id = $this->_request->getParam('category_id');
				$info = $this->mChuyenmuc->getCmById($category_id);
				
				//Nếu là chuyên mục cha thì chỉ lấy ra các danh mục cha khác
				if($this->mChuyenmuc->isParent($category_id))
				{
					$form = $this->setForm(1,$category_id);
				}
				else 
				{
					$form = $this->setForm(0,0);
				}
				
				$form->setAction($this->view->baseUrl().'/admin/chuyenmuc/edit/category_id/'.$category_id);
				$form->getElement('category_name')->setValue($info['category_name']);
				$form->getElement('category_parent_id')->setValue($info['category_parent_id']);
				$form->getElement('is_active')->setValue($info['is_active']);
				
				$this->view->form=$form;
				$this->view->title="Sửa thông tin chuyên mục";
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if ($this->mChuyenmuc->editCm($category_id, $input))
						{
							$newestId=$category_id;
							$parent_id=$input['category_parent_id'];
							
							$listUser=$this->mUser->getListAll();
							foreach ($listUser as $subUser)
							{
								if ($parent_id!=0)
								{
									$listChild=$this->mChuyenmuc->getListChildByParentId($parent_id);
									if (count($listChild)>0)
									{
										
											$firstUserId=$subUser['user_id'];
											$count=0;
											foreach ($listChild as $child)
											{
												if ($this->mChuyenmuc->getUserByCategoryIdUserId($child['category_id'],$firstUserId))
													$count++;
											}
											if ($count==count($listChild)-1)
											{
												$userId=$firstUserId;
											}
											else 
											{
												$userId=false;
											}
									}
									else 
									{
										$userId=$this->mChuyenmuc->getUserByCategoryId($parent_id);
									}
									if ($userId)
									{
										$this->mChuyenmuc->insertUserForCategory($userId,$newestId);
									}
								}
							}
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
			}
			else {
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
		}
		
		function delAction()
		{
			if($this->role == "0")
			{
				$category_id=$this->_request->getParam('category_id');
				
				if ($this->mChuyenmuc->deleteCm($category_id))
					$_SESSION['result']='Xóa thành công';
				else $_SESSION['result']='Xóa không thành công';
				
				$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
			}
			else {
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
		}
		
		
	}
