<?php
	class Portfolio extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['page']='site/vportfolio';
			$data['module']=$this->module;
			$this->load->view("front/container",$data);
		}

	}
?>