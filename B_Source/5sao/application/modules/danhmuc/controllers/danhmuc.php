<?php
	class Danhmuc extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdanhmuc');
			$this->addVisiting();
		}
		
		function index()
		{
			$data['list_tintuc']=$this->Mhomepage->getListOffset('tintuc',15,0);
			$data['list']=$this->Mdanhmuc->getListFull('danhmuc');
			$data['module']=$this->module;
		}
	}
?>