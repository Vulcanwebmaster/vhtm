<?php
	class Hoithao extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_templage_shop').'vhoithao';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>