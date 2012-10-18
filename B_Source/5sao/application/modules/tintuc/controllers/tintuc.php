<?php
class Tintuc extends NIW_Controller
{
	function __construct()
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
		$lang=$this->session->userdata('lang');
		if ($lang=='vn')
		{
			$this->lang->load('5sao','vietnamese');
		}
		else $this->lang->load('5sao','english');
	}
	
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$config['base_url']=base_url().'tintuc/page/';
		$config['per_page']=8;
		$config['total_rows']=count($this->Mtintuc->getListFull('tintuc'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		
		$data['list_spbanchay']=$this->Mtintuc->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mtintuc->getListFull('thuvienanh');
		$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
		$data['list_tintuc_right']=$this->Mtintuc->getListFull('tintuc');
		$data['list_gioithieumenu']=$this->Mtintuc->getListFull('gioithieu');
		$data['categories']=$this->Mtintuc->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['title']='5saoviet | Tin tức';
		$data['lang']=$this->session->userdata("lang");
		$data['list_tintuc']=$this->Mtintuc->getListOffset('tintuc',8,$index);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_tintuc_right']=$this->Mtintuc->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mtintuc->getListFull('gioithieu');
		$data['categories']=$this->Mtintuc->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['list_spbanchay']=$this->Mtintuc->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mtintuc->getListFull('thuvienanh');
		$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
		$data['lang']=$this->session->userdata("lang");
		$data['title']='5saoviet | Tin tức';
		$data['detail']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}