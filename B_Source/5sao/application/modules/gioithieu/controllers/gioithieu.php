<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mgioithieu');
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
		$data['list_gioithieumenu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['categories']=$this->Mgioithieu->getListByColumn('danhmuc','parent_id','0');
		
		$data['title']='5saoviet | Giới thiệu';
		$data['lang']=$this->session->userdata("lang");
		$data['list_gioithieu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['module']=$this->module;
		$data['page']='vgioithieu';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_gioithieumenu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['categories']=$this->Mgioithieu->getListByColumn('danhmuc','parent_id','0');
		
		$data['lang']=$this->session->userdata("lang");
		$data['title']='5saoviet | Giới thiệu';
		$data['detail']=$this->Mgioithieu->getRowByColumn('gioithieu','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}