<?php
	class Gioithieu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgioithieu');
		}
		
		function index()
		{
			$data['list']=$this->Mgioithieu->getListFull('mc_about_us');
			$data['module']=$this->module;
		}
	}
?>