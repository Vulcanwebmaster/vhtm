<?php
	class Contactus extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vcontactus';
			$data['module']=$this->module;
			$data['title']='L.R.X | Contact Us';
			$data['maintitle']="We'd love to hear from you";
			$this->load->view($this->_container,$data);
		}
	}
?>