<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mgioithieu');
	}
	
	function index()
	{
		
		$data['list_tuvan']=$this->Mgioithieu->getListFull('tuvansanpham');
		
		$data['title']='thaiduong | Giới thiệu';
		$data['list_gioithieu']=$this->Mgioithieu->getRowByColumn('oto_about_us','id',1);
		$data['module']=$this->module;
		$data['page']='vgioithieu';
		$this->load->view('front/container',$data);
	}
}