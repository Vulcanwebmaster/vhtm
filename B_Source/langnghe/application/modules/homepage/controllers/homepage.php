<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('pagination');
		
		//var_dump($_SESSION['front_user_fullname']); die();
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$data['items'] = $this->Mhomepage->getListOffset('ln_village',4,$index);
		$data['list_slide']=$this->Mhomepage->getListFull('slide');
		$data['list_tintuc']=$this->Mhomepage->getListOffset('ln_news',2,0);
		$data['product']=$this->Mhomepage->getListOffset('ln_product',5,0);
		$data['product_timkiem']=$this->Mhomepage->getListOffset('ln_product',5,0);
		
		$data['title']='langnghe | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}