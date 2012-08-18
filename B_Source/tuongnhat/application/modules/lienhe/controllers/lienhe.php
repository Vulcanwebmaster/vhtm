<?php
	class Lienhe extends NIW_Controller
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
			$data['page']='vlienhe';
			$this->load->view('front/container',$data);
		}
	}
?>