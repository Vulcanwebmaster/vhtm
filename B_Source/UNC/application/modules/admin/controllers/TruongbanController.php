<?php
	class Admin_TruongbanController extends Zend_Controller_Action
	{
		protected $mTruongban;
		protected $mChuyenmuc;
		protected $mUser;
		protected $user;
		protected $role;
		protected $listParent,$listChild;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		    $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		    Zend_Layout::startMvc ($option);
			$this->mTruongban = new Admin_Model_Mtruongban();
			$this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			
			$this->listParent = $this->mChuyenmuc->getListParent();
			$this->listChild = $this->mChuyenmuc->getListChild();
			
			@session_start();
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
		}
		
		function setForm()
		{
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$user_login = new Zend_Form_Element_Text('user_login');
			$user_login->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
			$user_pass = new Zend_Form_Element_Password('user_pass');
			$user_pass->setAttrib('renderPassword', true);
			$user_pass->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
			
			$user_fullname = new Zend_Form_Element_Text('user_fullname');
			$user_fullname->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên người dùng không được để trống'));
			
			$user_email = new Zend_Form_Element_Text('user_email');
			$user_email->addValidator('EmailAddress',true,array('messages'=>'Địa chỉ email không hợp lệ'));
			$user_email->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Email không được để trống'));
			
			$user_address = new Zend_Form_Element_Text('user_address');
			$user_address->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Địa chỉ không được để trống'));
			
			$is_active=new Zend_Form_Element_Radio('is_active');
			$is_active->setRequired(true)
					->setLabel('Is active?')
					->setMultiOptions(array(
                                                                      "0" => "Không",
                                                                      "1" => "Có"));

			$user_login->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$user_pass->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_fullname->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_email->removeDecorator('HtmlTag')->removeDecorator('Label');
			$user_address->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($user_login,$user_pass,$user_fullname,$user_email,$user_address,$is_active));
			return $form;
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			//echo $this->role;die();
			if($this->role == "2")
			{
				$user_id = $this->mTruongban->getIdByUsername($this->user);
				$category_id = $this->mTruongban->getCategoryIdByUserId($user_id);
				
				$allTruongban = $this->mTruongban->getListByRole('1');
				$listUser = array();
				$listUserId = array();
				foreach($category_id as $category)
				{
					foreach($this->mTruongban->getUserIdByCategoryId($category['category_id']) as $user)
					{
						if($user['user_id'] != $user_id)
						{
							$listUser[] = $user['user_id'] ;
						}
					}
				}
				//var_dump($listUser);die();
				
				$listUser = $this->sort($listUser);
				$listUser = $this->setNull($listUser);
				
				foreach($listUser as $user)
				{
					if($user != null)
					{
						$listUserId[] = $user;
					}
				}
				//var_dump($listUserId);die();
				$listTruongBan = array();
				
				foreach($allTruongban as $truongban)
				{
					foreach($listUserId as $user)
					{
						if($truongban['user_id'] == $user)
						{
							$listTruongBan[] = $truongban;
						}
					}
				}
				
				//var_dump($listTruongBan);die();
				$paginator = Zend_Paginator::factory($listTruongBan);
			}
			else 
			{
				$paginator = Zend_Paginator::factory($this->mTruongban->getListByRole('1'));
			}
			
        	$paginator->setItemCountPerPage(5);        
        	$currentPage = $this->_request->getParam('page',1);
         	$paginator->setCurrentPageNumber($currentPage);
        	$this->view->list=$paginator;
			$this->view->title="Trưởng ban";
			
			$this->view->role = $this->role;
			$this->view->user = $this->user;
		}
		
		function setNull($list)
		{
			for($i=0;$i<count($list)-1;$i++)
				{
					if($list[$i] == $list[$i+1])
					{
						$list[$i] = null;
					}
				}
				
			return $list;
		}
		
		function sort($list)
		{
			for($i=0;$i<count($list)-1;$i++)
			{
	        	for($j=$i+1;$j<count($list);$j++)
				{
		            if($list[$i]<$list[$j])
		            {
		                $tg=$list[$i]; $list[$i]=$list[$j]; $list[$j]=$tg;
		            }
				}
			}
			return $list;
		}
		
		function _getInput($form)
		{
			$input = array(
						'user_login' 	=> $form->getValue('user_login'),
						'user_pass'		=> $form->getValue('user_pass'),
						'user_fullname'	=> $form->getValue('user_fullname'),
						'user_email'	=> $form->getValue('user_email'),
						'user_address'	=> $form->getValue('user_address'),
						'is_active'		=> $form->getValue('is_active'),
						'role_id'		=> '1'
			);
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm trưởng ban";
			$this->view->listParent = $this->listParent;
			$this->view->listChild = $this->listChild;
			//var_dump($this->listParent);die();
			$form = $this->setForm();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					
					if($this->mTruongban->isExitsUsername($input['user_login']))
					{
						 
						$_SESSION['result']='Tên đăng nhập đã tồn tại !';
					}
					else 
					{
						
						
						if ($this->mTruongban->insertUser($input))
						{
							$user_id = $this->mTruongban->getUserIdByUserLogin($input['user_login']);
							//echo $user_id;die();
							foreach($_POST['checkbox'] as $check)
							{
								$this->mChuyenmuc->insertUserForCategory($user_id,$check);
							}
							//die();
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/truongban');
						}
						else 
						{
							$_SESSION['result']='Thêm mới không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/truongban');
						}
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
			
			$form=$this->setForm();
			$userId=$this->_request->getParam('userid');
			$this->view->role = $this->role;
			$this->view->listParent = $this->listParent;
			$this->view->listChild = $this->listChild;
			$this->view->listCategoryId = $this->mChuyenmuc->getListCategoryIdByUserId($userId);
		
			$info=$this->mTruongban->getUserById($userId);
			//echo $info['user_pass'];die();
			//var_dump($info);die();
			//echo $this->role.' --- '.$this->user.' --- '.$info['user_login'];die();
			if($this->role =="0" | ($this->role == "1" & $this->user == $info['user_login']))
			{
				$form->setAction($this->view->baseUrl().'/admin/truongban/edit/userid/'.$userId);
				$form->getElement('user_login')->setValue($info['user_login']);
				$form->getElement('user_pass')->setValue($info['user_pass']);
				$form->getElement('user_fullname')->setValue($info['user_fullname']);
				$form->getElement('user_email')->setValue($info['user_email']);
				$form->getElement('user_address')->setValue($info['user_address']);
				$form->getElement('is_active')->setValue($info['is_active']);
				
				$this->view->form=$form;
				$this->view->title="Sửa thông tin trưởng ban";
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						//echo 'abc';die();
						$input=$this->_getInput($form);
						if($info['user_login']==$input['user_login'])
						{
							if($this->mTruongban->editUser($userId, $input))
							{
								if($this->mChuyenmuc->delManageCategoryByUserId($userId))
								{
									foreach($_POST['checkbox'] as $check)
									{
										$this->mChuyenmuc->insertUserForCategory($userId,$check);
									}
								}
								$_SESSION['result']='Cập nhật thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/truongban');
							}
							else 
							{
								$_SESSION['result']='Cập nhật không thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/truongban');
							}
						}
						else 
						{
							if($this->mTruongban->isExitsUsername($input['user_login']))
							{
								$_SESSION['result']='Tên đăng nhập đã tồn tại !';

							}
							else 
							{
								if ($this->mTruongban->editUser($userId, $input))
								{
									$_SESSION['result']='Cập nhật thành công';
									$this->_redirect($this->view->baseUrl().'/../admin/truongban');
								}
								else 
								{
									$_SESSION['result']='Cập nhật không thành công';
									$this->_redirect($this->view->baseUrl().'/../admin/truongban');
								}
							}
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
			}
			else
			{
				$_SESSION['result']='Bạn không có quyền sửa mục này !';
				$this->_redirect($this->view->baseUrl().'/../admin/truongban');
			}
			
		}

		function deleteAction()
		{
			$userid=$this->_request->getParam('userid');
			if($this->role == "0")
			{
				if ($this->mTruongban->deleteUser($userid))
					$_SESSION['result']='Xóa thành công';
				else $_SESSION['result']='Xóa không thành công';
			}
			else 
			{
				$_SESSION['result']='Bạn không có quyền xóa mục này !';
			}
			$this->_redirect($this->view->baseUrl().'/../admin/truongban');
		}
	}