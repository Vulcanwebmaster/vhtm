<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->setLang();
		
		$this->loadLang();
		
		$this->addVisiting();
		$this->load->library('pagination');
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

	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$config['base_url']=base_url().'homepage/page/';
		$config['per_page']= 9;
		$config['total_rows']=count($this->Mhomepage->getListByColumn('sanpham','moi','1'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		
		$data['list_spbanchay']=$this->Mhomepage->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Mhomepage->getListFull('thuvienanh');
		$data['list_hotro']=$this->Mhomepage->getListFull('hotro');
		$data['list_hotline']=$this->Mhomepage->gethotline('hotro');
		$data['list_doitac']=$this->Mhomepage->getListFull('doitac');
		$data['list_tintuc_right']=$this->Mhomepage->getListOffset('tintuc',15,0);
		$data['list_tintuc']=$this->Mhomepage->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Mhomepage->getListFull('gioithieu');
		$data['categories']=$this->Mhomepage->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['lang']=$this->session->userdata('lang');
		$data['list']=$this->Mhomepage->getListByColumnOffset('sanpham','moi','1',$index,9);
		$data['title']='thaiduong | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */