<?php
class Admin_GetnewssettingController extends Zend_Controller_Action
{
	private $mGetnews,$mRss,$mChuyenmuc;
	function init()
	{
		@session_start();
		if (isset($_SESSION['role_id']))
		{
			if ($_SESSION['role_id']=='2')
				$this->_redirect($this->view->baseUrl().'/../admin');
				
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mGetnews = new Admin_Model_Mgetnews();
			  $this->mRss= new Admin_Model_Mrss();
			  $this->mChuyenmuc=new Admin_Model_Mchuyenmuc();
			  
			  $this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			$_SESSION["backend_current_menu"]="menu-quanlytin";
		}
		else $this->_redirect($this->view->baseUrl().'/../admin');
	}
	
	function indexAction()
	{
		if ($_SESSION['role_id']=='0')
			$list=$this->mChuyenmuc->getListChildFull();
		elseif ($_SESSION['role_id']=='1')
		{
			$listUserCate=$this->mChuyenmuc->getListCategoryIdByUserId($_SESSION['user_id']);
			$list=array();
			foreach ($listUserCate as $userCate)
			{
				$item=$this->mChuyenmuc->getCmById($userCate['category_id']);
				if ($item)
					$list[]=$item;
			}
		}
		
        $this->view->list=$list;
		$this->view->title="Cài đặt lấy tin tự động";
	}
	
	function setForm()
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$name = new Zend_Form_Element_Text('name');
			$name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên danh mục không được để trống'));
			
			$name->removeDecorator('HtmlTag')->removeDecorator('Label');	
			
			$form->addElement($name);
			return $form;
		}
	
	function _getInput($form)
	{
		$input = array('name' => $form->getValue('name'));
		return $input;
	}
		
	function insertAction()
	{
		$this->view->title = "Thêm danh mục";
		$form = $this->setForm();
		$form->setAction($this->view->baseUrl().'/admin/getnewssetting/insert');
		
		if($this->_request->isPost())
		{
			
			if($form->isValid($_POST))
			{
				$input=$this->_getInput($form);
				if ($this->mGetnews->insertCampaign($input))
				{
					$_SESSION['result']='Thêm mới thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting');
				}
				else 
				{
					$_SESSION['result']='Thêm mới không thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/insert');
				}
			}
			else 
			{
				$this->view->form=$form;
				$form->populate($_POST);
			}
			
		}
		else
		{
			$this->view->form=$form;
		}
	}
	
	function editAction()
	{
		$campaign_id=$this->_request->getParam('campaign_id');
		$this->view->title = "Sửa danh mục";
		$form = $this->setForm();
		$form->setAction($this->view->baseUrl().'/admin/getnewssetting/edit/campaign_id/'.$campaign_id);
		
		if($this->_request->isPost())
		{
			
			if($form->isValid($_POST))
			{
				$input=$this->_getInput($form);
				if ($this->mGetnews->editCampaign($campaign_id,$input))
				{
					$_SESSION['result']='Cập nhật thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting');
				}
				else 
				{
					$_SESSION['result']='Cập nhật không thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/edit/campaign_id/'.$campaign_id);
				}
			}
			else 
			{
				$this->view->form=$form;
				$form->populate($_POST);
			}
			
		}
		else
		{
			$info=$this->mGetnews->getCampaignById($campaign_id);
			$form->getElement('name')->setValue($info['name']);
			$this->view->form=$form;
		}
	}
	
	function delAction()
	{
		$campaign_id=$this->_request->getParam('campaign_id');
		
		if ($this->mGetnews->deleteCampaign($campaign_id))
			$_SESSION['result']='Xóa thành công';
		else $_SESSION['result']='Xóa không thành công';
		
		$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting');
	}
	
	//=================================== RSS MANAGER =================================================
	
	function showlistrssAction()
	{
		$campaign_id=$this->_request->getParam('campaign_id');
		$campaign=$this->mChuyenmuc->getCmById($campaign_id);
		$_SESSION['campaign_id']=$campaign_id;
		$listRss=$this->mRss->getListRssByCampaignId($campaign_id);
		
		$paginator = Zend_Paginator::factory($listRss);
        $paginator->setItemCountPerPage(15);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->title="Danh mục RSS: ".$campaign['category_name'];
		
		$this->view->list=$paginator;
		$listCampaign=array();
		foreach ($listRss as $rss)
		{
			$current_camp=$this->mRss->getCampaignById($rss['campaign_id']);
			$listCampaign[]=$current_camp['name'];
		}
		$this->view->listCampaign=$listCampaign;
	}
	
	function setFormRss()
	{
		$form=new Zend_Form;
		$form->setMethod('post')->setAction('');
		
		$link = new Zend_Form_Element_Text('link');
		$link->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Link không được để trống'));
		
		$listCampaign=$this->mRss->getListCampaign();
		$campaigns=array();
		foreach ($listCampaign as $camp)
		{
			$campaigns[$camp['id']]=$camp['name'];
		}
		$campaign_id=$form->createElement('select', 'campaign_id', array('multioptions'=>$campaigns));
		$status=$form->createElement('select', 'status', array('multioptions'=>array('0'=>'Tạm dừng', '1'=>'Hoạt động')));
		$source = new Zend_Form_Element_Text('source');
		$source->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'"Nguồn" không được để trống'));
		
		$link->removeDecorator('HtmlTag')->removeDecorator('Label');	
		$campaign_id->removeDecorator('HtmlTag')->removeDecorator('Label');
		$status->removeDecorator('HtmlTag')->removeDecorator('Label');
		$source->removeDecorator('HtmlTag')->removeDecorator('Label');
		
		$form->addElements(array($link,$campaign_id,$status,$source));
		return $form;
	}
	
	function _getInputRss($form)
	{
		$input = array('link' => $form->getValue('link'),
						'campaign_id' => $form->getValue('campaign_id'),
						'status' => $form->getValue('status'),
						'source' => $form->getValue('source'));
		return $input;
	}
	
	function insertrssAction()
	{
		$this->view->title = "Thêm rss";
		$form = $this->setFormRss();
		$form->setAction($this->view->baseUrl().'/admin/getnewssetting/insertrss');
		
		if($this->_request->isPost())
		{
			
			if($form->isValid($_POST))
			{
				$input=$this->_getInputRss($form);
				if ($this->mRss->insertRss($input))
				{
					$_SESSION['result']='Thêm mới thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/showlistrss/campaign_name/'.$_SESSION['campaign_name']);
				}
				else 
				{
					$_SESSION['result']='Thêm mới không thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/insertrss');
				}
			}
			else 
			{
				$this->view->form=$form;
				$form->populate($_POST);
			}
		}
		else
		{
			$this->view->form=$form;
		}
	}
	
	function editrssAction()
	{
		$rssId=$this->_request->getParam('rss_id');
		$this->view->title = "Sửa rss";
		$form = $this->setFormRss();
		$form->setAction($this->view->baseUrl().'/admin/getnewssetting/editrss/rss_id/'.$rssId);
		
		if($this->_request->isPost())
		{
			
			if($form->isValid($_POST))
			{
				$input=$this->_getInputRss($form);
				if ($this->mRss->updateRss($rssId,$input))
				{
					$_SESSION['result']='Cập nhật thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/showlistrss/campaign_name/'.$_SESSION['campaign_name']);
				}
				else 
				{
					$_SESSION['result']='Cập nhật không thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/editrss/campaign_id/'.$_SESSION['campaign_id']);
				}
			}
			else 
			{
				$this->view->form=$form;
				$form->populate($_POST);
			}
		}
		else
		{
			$info=$this->mRss->getRssById($rssId);
			$form->getElement('link')->setValue($info['link']);
			$form->getElement('campaign_id')->setValue($info['campaign_id']);
			$form->getElement('status')->setValue($info['status']);
			$form->getElement('source')->setValue($info['source']);
			$this->view->form=$form;
		}
	}
	
	function delrssAction()
	{
		$rssId=$this->_request->getParam('rss_id');
		if ($this->mRss->delRssById($rssId))
			$_SESSION['result']='Xóa thành công';
		else $_SESSION['result']='Xóa không thành công';
		
		$this->_redirect($this->view->baseUrl().'/../admin/getnewssetting/showlistrss/campaign_name/'.$_SESSION['campaign_name']);
	}
}