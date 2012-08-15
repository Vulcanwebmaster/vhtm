<?php
	class Homapage extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
	}
?>