<?php
class Thuvienanh extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mthuvienanh');
		$this->setLang();
		$this->loadLang();
		$this->addVisiting();
	}
	
	function loadLang()
	{
		
		session_start();
        if(isset($_SESSION['lang'])) {
		   $lang=$_SESSION['lang'];
        } else {
        	$lang = 'vn';
		} 
		
        if ($lang=='vn') {
        	$_SESSION['lang']='vn';
			$this->lang->load('5sao','vietnamese');
			
		} else {
			$this->lang->load('5sao','english');
			$_SESSION['lang']='en';
		}
	}
	
	function index()
	{
		$data['list_spbanchay']=$this->Mthuvienanh->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mthuvienanh->getListFull('thuvienanh');
		$data['list_doitac']=$this->Mthuvienanh->getListFull('doitac');
		$data['list_hotro']=$this->Mthuvienanh->getListFull('hotro');
		$data['list_hotline']=$this->Mthuvienanh->gethotline('hotro');
		$data['list_tintuc_right']=$this->Mthuvienanh->getListOffset('tintuc',15,0);
		$data['list_thuvienanhmenu']=$this->Mthuvienanh->getListFull('thuvienanh');
		$data['categories']=$this->Mthuvienanh->getListByColumn('danhmuc','parent_id','0');
		$data['list_gioithieumenu']=$this->Mthuvienanh->getListFull('gioithieu');
		$data['counting']=$this->getCounting();
		
		$data['title']='thaiduong | Thư viện ảnh';
		$data['lang']=$this->session->userdata("lang");
		$data['list']=$this->Mthuvienanh->getListFull('thuvienanh');
		$data['module']=$this->module;
		$data['page']='vthuvienanh';
		$this->load->view('front/container',$data);
	}
}