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
		$data['list_gioithieumenu']=$this->Mtintuc->getListFull('gioithieu');
		$data['categories']=$this->Mtintuc->getListByColumn('danhmuc','parent_id','0');
		
		$data['title']='5saoviet | Tin tức';
		$data['lang']=$this->session->userdata("lang");
		$data['list_tintuc']=$this->Mtintuc->getListFull('tintuc');
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_gioithieumenu']=$this->Mtintuc->getListFull('gioithieu');
		$data['categories']=$this->Mtintuc->getListByColumn('danhmuc','parent_id','0');
		
		$data['lang']=$this->session->userdata("lang");
		$data['title']='5saoviet | Giới thiệu';
		$data['detail']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}