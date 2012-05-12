<?php
	class Ao extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$this->load->model('Get_data');
			$data['list']=$this->Get_data->get_list();
			
			$data['page']=$this->config->item('backendpro_template_shop').'dsao';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>