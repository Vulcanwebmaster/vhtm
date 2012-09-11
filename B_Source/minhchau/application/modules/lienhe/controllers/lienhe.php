<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mlienhe');
		}
		
		function index()
		{
			$data['list']=$this->Mlienhe->getListFull('mc_contact_us');
			$data['module']=$this->module;
		}
	}
?>