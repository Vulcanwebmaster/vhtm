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
			$data['list']=$this->Mdanhmuc->getListFull('mc_category');
			$data['list_hotro']=$this->Mdanhmuc->getListFull('hotro');
			$data['list_doitac']=$this->Mdanhmuc->getListFull('doitac');
			$data['list_lienhe']=$this->Mdanhmuc->getListFull('mc_contact_us');
			$data['module']=$this->module;
		}
	}
?>