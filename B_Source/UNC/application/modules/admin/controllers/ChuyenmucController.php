<?php
	class Admin_ChuyenmucController extends Zend_Controller_Action
	{
		protected $mChuyenmuc;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
		}
		
		function setForm()
		{
			
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$category_name = new Zend_Form_Element_Text('category_name');
			$category_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên chuyên mục không được để trống'));
			/*
			$category_parent_id = new Zend_Form_Element_Select('category_parent_id');
			$category_parent_id->addMultiOption('', '0');
			foreach($this->mDanhmuc->getListDM() as $item)
			{
				$category_parent_id->addMultiOption($item['category_name'], $item['category_id']);
			}
			*/
			$is_active = $form->createElement("select","is_active",array(
                                                        "label" => "Kích hoạt",
                                                   "multioptions"=> array(
                                                                      "1" => "Có",
                                                                      "0" => "Không")));
			$category_name->removeDecorator('HtmlTag')->removeDecorator('Label');	
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($category_name,$is_active));
			return $form;
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$paginator = Zend_Paginator::factory($this->mChuyenmuc->getListCM());
        	$paginator->setItemCountPerPage(5);        
        	$paginator->setPageRange(3);
        	$currentPage = $this->_request->getParam('page',1);
         	$paginator->setCurrentPageNumber($currentPage);
        	$this->view->list=$paginator;
			$this->view->title="Quản lý chuyên mục";
			
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
						'category_parent_id'	=> $this->_request->getPost('category_parent_id'),
						'is_active'				=> $form->getValue('is_active'),
			);
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title = "Thêm chuyên mục";
			$this->view->list = $this->mChuyenmuc->getListCmParent();
			$form = $this->setForm();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mChuyenmuc->insertCm($input))
					{
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
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->setForm();
			$category_id=$this->_request->getParam('category_id');
			$info=$this->mChuyenmuc->getCmById($category_id);
			
			$form->setAction($this->view->baseUrl().'/admin/chuyenmuc/edit/category_id/'.$category_id);
			$form->getElement('category_name')->setValue($info['category_name']);
			$form->getElement('is_active')->setValue($info['is_active']);
			
			$this->view->form=$form;
			$this->view->title="Sửa thông tin chuyên mục";
			$this->view->list = $this->mChuyenmuc->getListCmParent();
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
					$input=$this->_getInput($form);
					if ($this->mChuyenmuc->editCm($category_id, $input))
					{
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
		
		function delAction()
		{
			$category_id=$this->_request->getParam('category_id');
			
			if ($this->mChuyenmuc->deleteCm($category_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/chuyenmuc');
		}

	}
?>