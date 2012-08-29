<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lienhe extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlienhe');
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$data['lienhe']=$this->Mlienhe->getLienHe();
		$data['loaikhoahoc']=$this->Mlienhe->list_loaikhoahoc();
		$data['title']='Liên Hệ';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vlienhe';
		$this->load->view('front/container',$data);
	}
}