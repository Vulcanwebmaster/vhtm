<?php
	class Admin_PhongvienController extends Zend_Controller_Action
	{
		protected $mUser;
		protected $user;
		protected $role;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
		      
		      session_start();
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
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			if($this->role =="0")
			{
				// Nếu là admin, hiển thị tất cả các phóng viên.
				$paginator = Zend_Paginator::factory($this->mUser->getListByRole('2'));
			}
			
			if($this->role == "1")
			{
				//Nếu là trưởng ban
				$user_id = $this->mUser->getIdByUsername($this->user);
				
				$allPhongvien = $this->mUser->getListByRole('2');
				
				$listUser = array();
				$listUserId = array();
				$category_id = $this->mUser->getCategoryIdByUserId1($user_id);
				
				foreach ($category_id as $category)
				{
					foreach($this->mUser->getUserIdByCategoryId($category['category_id']) as $user)
					{
						if($user['user_id'] != $user_id)
						{
							//echo $user['user_id'].'<br>';
							$listUser[] = $user['user_id'] ;
						}
					}
				}
				$listUser = $this->sort($listUser);
				for($i=0;$i<count($listUser)-1;$i++)
				{
					if($listUser[$i] == $listUser[$i+1])
					{
						$listUser[$i] = null;
					}
				}
				
				foreach($listUser as $user)
				{
					if($user != null)
					{
						$listUserId[] = $user;
					}
				}
				
				$listPhongvien = array();
				
				foreach($allPhongvien as $phongvien)
				{
					foreach($listUserId as $user)
					{
						if($phongvien['user_id'] == $user)
						{
							$listPhongvien[] = $phongvien;
						}
					}
				}
				
				$paginator = Zend_Paginator::factory($listPhongvien);
			}
			
			if($this->role =="2")
			{
				// Nếu là phóng viên, hiển thị tất cả các phóng viên.
				$paginator = Zend_Paginator::factory($this->mUser->getListByRole('2'));
			}
			/*else if($this->role == "2")
			{
				//Nếu là phóng viên
				$user_id = $this->mUser->getIdByUsername($this->user);
				
				//Danh sách category mà phóng viên đó đảm nhiệm
				$category_id = $this->mUser->getCategoryIdByUserId($user_id);
				//echo $category_id;die();
				//Danh sách tất cả phóng viên và trưởng ban cùng quản lý các chuyên mục đó
				$listUser = $this->mUser->getListUserIdByCategoryId($category_id,$user_id);
				//var_dump($listUser);die();
				//Danh sách tất cả các phóng viên trong bảng unc_user
				$allUser = $this->mUser->getListByRole('2');
				
				//Danh sách phóng viên cân hiển thị
				$listUser1 = array();
				
				//Duyệt tất cả các phóng viên trong bảng unc_user
				foreach($allUser as $User1)
				{
					//Duyệt tất cả các phóng viên và trưởng ban cùng quản lý các chuyên muc đó
					foreach($listUser as $user)
					{
						//Nếu phóng viên đó có user_id = user_id của phóng viên trong unc_user thì thêm vào danh sách
						if($User1['user_id']==$user['user_id'])
						{
							$listUser1[]=$User1;
						}
					}
				}
				
				//var_dump($listUser1);die();
				$paginator = Zend_Paginator::factory($listUser1);
			}
			/*	else 
			{
				$paginator = Zend_Paginator::factory($this->mUser->getListByRole('2'));
			}*/
			
			$paginator->setItemCountPerPage(6);
			$current=$this->_request->getParam('page',1);
			$paginator->setCurrentPageNumber($current);			
			$this->view->list=$paginator;
			$this->view->title="Phóng viên";
			
			$this->view->role = $this->role;
			$this->view->user = $this->user;
		}
		
		function deleteAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$userid=$this->_request->getParam('userid');
			if($this->role == "0")
			{
				if ($this->mUser->deleteUser($userid))
					$_SESSION['result']='Xóa thành công';
				else $_SESSION['result']='Xóa không thành công';
			}
			else 
			{
				$_SESSION['result']='Bạn không có quyền xóa mục này !';
			}
			
			$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
		}
		
		function setForm()
		{
			$form=new Zend_Form();
			$form->setMethod('post');
			$form->setName('insertForm');
			$form->setAction($this->view->baseUrl().'/admin/phongvien/insert');
			
			
			$form->addElement('text','user_login');
			$user_login=$form->getElement('user_login');
			$user_login->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			$user_login->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_pass');
			$el=$form->getElement('user_pass');
			$el->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_fullname');
			$el=$form->getElement('user_fullname');
			$el->setLabel('Họ tên');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_email');
			$el=$form->getElement('user_email');
			$el->addValidator('EmailAddress', true , array('messages'=>'Email phải nhập đúng định dạng'));
			$el->setLabel('Email');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','user_address');
			$el=$form->getElement('user_address');
			$el->setLabel('Địa chỉ');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$el=$form->createElement("select","is_active",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "0" => "Không",
                                                                      "1" => "Có")));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			return $form;
		}
		
		function _getInput($form)
		{
			$input=array('user_login'=>$form->getValue('user_login'),
						'user_pass'=>$form->getValue('user_pass'),
						'user_fullname'=>$form->getValue('user_fullname'),
						'user_email'=>$form->getValue('user_email'),
						'user_address'=>$form->getValue('user_address'),
						'is_active'=>$form->getValue('is_active'),
						'role_id'=>'2');
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm phóng viên";
			
			$form=$this->setForm();
			if ($this->_request->isPost())
			{
				if (!$form->isValid($_POST))
				{
					$this->view->form=$this->setForm($form);
				}
				else
				{
					$input=$this->_getInput($form);
					if($this->mUser->isExitsUsername($input['user_login']))
					{
						//echo 'abc';die();
						$_SESSION['result']='Tên đăng nhập đã tồn tại !';
						
					}
					else 
					{
							if ($this->mUser->insertUser($input))
							{
								$_SESSION['result']='Thêm mới thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
							}
							else 
							{
								$this->view->error=$form->getMessage();
								
							}
					}
				}
			}
			$this->view->form=$form;
		}
		
		function editAction()
		{
			$this->view->title='Chỉnh sửa phóng viên';
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->setForm();
			
			$userId=$this->_request->getParam('userid');
			$info=$this->mUser->getUserById($userId);
			if($this->role =="0" |$this->role =="1" | ($this->role == "2" & $this->user == $info['user_login']))
			{
				$form->setAction($this->view->baseUrl().'/admin/phongvien/edit/userid/'.$userId);
				$form->getElement('user_login')->setValue($info['user_login']);
				
				$form->getElement('user_pass')->setValue($info['user_pass']);
				$form->getElement('user_fullname')->setValue($info['user_fullname']);
				$form->getElement('user_email')->setValue($info['user_email']);
				$form->getElement('user_address')->setValue($info['user_address']);
				$form->getElement('is_active')->setValue($info['is_active']);
				$this->view->form=$form;
				$this->view->title="Sửa thông tin phóng viên";
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if($info['user_login']==$input['user_login'])
						{
							if ($this->mUser->editUser($userId, $input))
							{
								$_SESSION['result']='Cập nhật thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
							}
							else 
							{
								$_SESSION['result']='Cập nhật không thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
							}
						}
						else 
						{
							if($this->mUser->isExitsUsername($input['user_login']))
							{
								$_SESSION['result']='Tên đăng nhập đã tồn tại !';
							}
							else 
							{
								if ($this->mUser->editUser($userId, $input))
								{
									$_SESSION['result']='Cập nhật thành công';
									$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
								}
								else 
								{
									$_SESSION['result']='Cập nhật không thành công';
									$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
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
				$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
			}
			
		/*	if ($this->_request->isPost())
			{
				if (!$form->isValid($_POST))
				{
					$userId=$this->_request->getParam('userid');
					$info=$this->mUser->getUserById($userId);
					
					$form->setAction($this->view->baseUrl().'/admin/phongvien/edit/userid/'.$userId);
					$form->getElement('user_login')->setValue($info['user_login']);
					$form->getElement('user_pass')->setValue($info['user_pass']);
					$form->getElement('user_fullname')->setValue($info['user_fullname']);
					$form->getElement('user_email')->setValue($info['user_email']);
					$form->getElement('user_address')->setValue($info['user_address']);
					$form->getElement('is_active')->setValue($info['is_active']);
					
					$this->view->form=$form;
				}
				else
				{
					$id=$this->_request->getParam('userid');
					$input=$this->_getInput($form);
						if($this->mUser->isExitsUsername($input['user_login']))
							{
								//echo 'a';die();	
								$_SESSION['result']='Tên đăng nhập đã tồn tại !';
								//echo 'b';die();
							}
						else {
							if ($this->mUser->editUser($id, $input))
							{
								$_SESSION['result']='Cập nhật thành công';
								$this->_redirect($this->view->baseUrl().'/../admin/phongvien');
							}
							else 
							{
								$this->view->error=$form->getMessage();
								//$this->view->form=$form;
							}
						}
				}
			}
			else
			{
				$userId=$this->_request->getParam('userid');
					$info=$this->mUser->getUserById($userId);
					
					$form->setAction($this->view->baseUrl().'/admin/phongvien/edit/userid/'.$userId);
					$form->getElement('user_login')->setValue($info['user_login']);
					$form->getElement('user_pass')->setValue($info['user_pass']);
					$form->getElement('user_fullname')->setValue($info['user_fullname']);
					$form->getElement('user_email')->setValue($info['user_email']);
					$form->getElement('user_address')->setValue($info['user_address']);
					$form->getElement('is_active')->setValue($info['is_active']);
					
					$this->view->form=$form;
			}*/
		}
	}