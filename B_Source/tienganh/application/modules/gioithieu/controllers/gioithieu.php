<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mgioithieu');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		//$data['product']=$this->Mgiangvien->getListOffset('ln_product',5,0);
		$data['items']=$this->Mgioithieu->getListByColumn('ta_about_us','about_category',1);
		$data['title']='tienganh | Giới thiệu';
		$data['list_gioithieu']=$this->Mgioithieu->getListOffset('ta_about_us',3,$index);
		$data['module']=$this->module;
		$data['page']='vgioithieu';
		$this->load->view('front/container',$data);
	}
}