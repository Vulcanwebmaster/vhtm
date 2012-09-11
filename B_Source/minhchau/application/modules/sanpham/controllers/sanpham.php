<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
		}
		
		function index()
		{
			$data['list']=$this->Msanpham->getListFull('mc_product');
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);			
		}
		
		function detail($id=0)
		{
			
		}
	}
?>