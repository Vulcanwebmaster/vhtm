<?php
class Tintuc extends NIW_Controller
{
/*	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mtintuc');
		$this->setLang();
		$this->loadLang();
		$this->load->library('pagination');
		$this->addVisiting();
	}
	
	function loadLang()
	{
		session_start();
                if(isset($_SESSION['lang']))
		{
		   $lang=$_SESSION['lang'];
                }
                else $lang = 'vn';
                if ($lang=='vn')
		{
			$this->lang->load('minhchau2','vietnamese');
		}
		else $this->lang->load('minhchau2','english');
	}*/
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->model('Mtintuc');
		$this->load->library('session');
		$this->setLang();
			
		if ($this->session->userdata('lang')=='vn')
		{
			$this->lang->load('mc','vietnamese');
		}
		else $this->lang->load('mc','english');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['items']=$this->Mtintuc->getListByColumn('mc_product','is_new',1);
		$data['parents']=$this->Mtintuc->getListByColumn('mc_category','parent_id',0);
			$data['list_hotro']=$this->Mtintuc->getListFull('hotro');
			$data['list_lienhe']=$this->Mtintuc->getListFull('mc_contact_us');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');		
		$data['title']='minhchau2 | Tin tức';
		$data['lang']=$this->session->userdata("lang");
		$data['list_tintuc']=$this->Mtintuc->getListOffset('tintuc',8,$index);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['items']=$this->Mtintuc->getListByColumn('mc_product','is_new',1);
		$data['parents']=$this->Mtintuc->getListByColumn('mc_category','parent_id',0);
		$data['list_lienhe']=$this->Mtintuc->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Mtintuc->getListFull('hotro');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');		
		$data['lang']=$this->session->userdata("lang");
		$data['title']='minhchau2 | Tin tức';
		$data['detail']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}