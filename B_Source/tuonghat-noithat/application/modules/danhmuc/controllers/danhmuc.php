<?php
	class Danhmuc extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdanhmuc');
		}
		
		function index()
		{
			$data['list']=$this->Mdanhmuc->getListFull('tn_categories');
			$data['module']=$this->module;
		}
	}
?>
