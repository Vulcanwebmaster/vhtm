<?php
class Thuvienanh extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mthuvienanh');
	}
	
	function index()
	{
		
		$data['list_thuvienanh']=$this->Mthuvienanh->getListFull('ln_thuvienanh');
		$data['product']=$this->Mthuvienanh->getListOffset('ln_product',5,0);
		$data['title']='langnghe | Thư viện ảnh';
		$data['list']=$this->Mthuvienanh->getListFull('ln_thuvienanh');
		$data['module']=$this->module;
		$data['page']='vthuvienanh';
		$this->load->view('front/container',$data);
	}
}