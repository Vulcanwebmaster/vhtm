<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hocphi extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mhocphi');
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	function index()
	{
		$data['hocphi']=$this->Mhocphi->list_hocphi();
		$data['title']='Học Phí';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vhocphi';
		$this->load->view('front/container',$data);
	}
	

}