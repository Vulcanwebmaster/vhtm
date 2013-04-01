<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->helper('text'); //cop vao controller
		$this->setLang();
		$this->loadLang();
	}
	
	public function index()
	{
		$data['lang']=$this->session->userdata("lang");
		$data['title']='[Niw] | Home';
		$data['show_slide']= 1;
		$data['list_slide']=$this->Mhomepage->getRowByColumn('slide','id','1');
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mhomepage->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mhomepage->getListFullODB('sanpham',6,'id','DESC');
		// Meta tags
		$homepage = $this->Mhomepage->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $homepage->meta_home;
		
		$data['index']= 1 ;
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */