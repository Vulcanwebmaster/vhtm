<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gioithieu extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mgioithieu');
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$data['loaikhoahoc']=$this->Mgioithieu->list_loaikhoahoc();
		$data['gioithieu']=$this->Mgioithieu->getGioiThieu();
		$data['title']='Giới thiệu';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vgioithieu';
		$this->load->view('front/container',$data);
	}
}