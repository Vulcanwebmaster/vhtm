<?php
	class Aboutus extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mboutus');
		}
		
		function index()
		{
			$data['page']='site/vaboutus';
			$data['module']=$this->module;
			$data['title']='L.R.X | About Us';
			$data['list']=$this->Mboutus->getDataAbout();
			$this->load->view("front/container",$data);
		}
	}
?>