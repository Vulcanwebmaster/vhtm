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
		$data['list_spbanchay']=$this->Mgioithieu->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mgioithieu->getListFull('thuvienanh');
		$data['list_hotro']=$this->Mgioithieu->getListFull('hotro');
		$data['list_hotline']=$this->Mgioithieu->gethotline('hotro');
		$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
		$data['list_tintuc_right']=$this->Mgioithieu->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['categories']=$this->Mgioithieu->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['title']='thaiduong | Giới thiệu';
		$data['lang']=$this->session->userdata("lang");
		$data['list_gioithieu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['module']=$this->module;
		$data['page']='vgioithieu';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_spbanchay']=$this->Mgioithieu->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mgioithieu->getListFull('thuvienanh');
		$data['list_hotro']=$this->Mgioithieu->getListFull('hotro');
		$data['list_hotline']=$this->Mgioithieu->gethotline('hotro');
		$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
		$data['list_tintuc_right']=$this->Mgioithieu->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mgioithieu->getListFull('gioithieu');
		$data['categories']=$this->Mgioithieu->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['lang']=$this->session->userdata("lang");
		$data['title']='thaiduong | Giới thiệu';
		$data['detail']=$this->Mgioithieu->getRowByColumn('gioithieu','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}