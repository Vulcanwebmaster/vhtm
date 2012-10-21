<?php
class Admin_GetnewssettingController extends Zend_Controller_Action
{
	private $mGetnews,$mRss;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/admin';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
		  $this->mGetnews = new Admin_Model_Mgetnews();
		  $this->mRss= new Admin_Model_Mrss();
		  session_start();
		  
		  $this->view->headTitle('UNC - Admin website');
		$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
	}
	
	function indexAction()
	{
		$paginator = Zend_Paginator::factory($this->mGetnews->getListCampaigns());
        $paginator->setItemCountPerPage(15);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->list=$paginator;
		$this->view->title="Cài đặt lấy tin tự động";
	}
	
	function setForm()
		{
			$form=new Zend_Form;
			$form->setMethod('post')->setAction('');
			
			$name = new Zend_Form_Element_Text('name');
			$name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên danh mục không được để trống'));
			
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
		$campaign_name=$this->_request->getParam('campaign_name');
		$campaign=$this->mRss->getCampaignByName($campaign_name);
		$listRss=$this->mRss->getListRssByCampaignId($campaign['id']);
		
		$paginator = Zend_Paginator::factory($listRss);
        $paginator->setItemCountPerPage(15);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->title="Danh mục RSS: ".$campaign['name'];
		
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
		
		$name = new Zend_Form_Element_Text('link');
		$name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Link không được để trống'));
		
		$form->addElement($name);
		return $form;
	}
	
	function _getInputRss($form)
	{
		$input = array('name' => $form->getValue('name'));
		return $input;
	}
	
	function insertrssAction()
	{
		
	}
}