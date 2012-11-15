<?php
class tuyendung extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->library('pagination');
		
		$this->load->model('Mtuyendung');
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
		$data['list_spbanchay']=$this->Mtuyendung->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mtuyendung->getListFull('thuvienanh');
		$data['list_hotro']=$this->Mtuyendung->getListFull('hotro');
		$data['list_hotline']=$this->Mtuyendung->gethotline('hotro');
		$data['list_tintuc_right']=$this->Mtuyendung->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mtuyendung->getListFull('gioithieu');
		$data['categories']=$this->Mtuyendung->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['list_doitac']=$this->Mtuyendung->getListFull('doitac');
		$data['title']='thaiduong | Sản phẩm';
		$data['detail']=$this->Mtuyendung->getRowByColumn('tuyendung','id','1');
		$data['lang']=$this->session->userdata('lang');
		$data['module']=$this->module;
		$data['page']='vtuyendung';
		$this->load->view('front/container',$data);
	}
}