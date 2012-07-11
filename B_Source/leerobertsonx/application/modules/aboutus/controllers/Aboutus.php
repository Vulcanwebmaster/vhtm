<?php
	class Aboutus extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vaboutus';
			$data['module']=$this->module;
			$data['title']='L.R.X | About Us';
			$this->load->view($this->_container,$data);
		}
	}
?>