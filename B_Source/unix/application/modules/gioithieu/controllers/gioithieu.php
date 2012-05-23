<?php
	class Gioithieu extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Getgioithieu');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'gioithieuview';
			$data['module']=$this->module;
			$data['gioithieu']=$this->Getgioithieu->get();
			$this->load->view($this->_container,$data);
		}
	}
?>