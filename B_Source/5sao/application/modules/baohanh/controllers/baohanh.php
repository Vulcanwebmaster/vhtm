<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baohanh extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mbaohanh');
		$this->load->library('session');
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

	public function index()
	{
		$data['list_spbanchay']=$this->Mbaohanh->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mbaohanh->getListFull('thuvienanh');
		$data['list_doitac']=$this->Mbaohanh->getListFull('doitac');
		$data['list_tintuc_right']=$this->Mbaohanh->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mbaohanh->getListFull('gioithieu');
		$data['categories']=$this->Mbaohanh->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['lang']=$this->session->userdata('lang');
		$data['list']=$this->Mbaohanh->getRowByColumn('baohanh','id','1');
		$data['title']='5saoviet | Bảo hành - bảo trì';
		$data['module'] = $this->module;
		$data['page'] = 'vbaohanh';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */