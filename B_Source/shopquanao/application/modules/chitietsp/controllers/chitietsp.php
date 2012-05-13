<?php
	class Chitietsp extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			
		}
		
		function get_inf($id)
		{
			$this->load->model('Get_inf');
			$data['inf']=$this->Get_inf->get($id);
			$data['other']=$this->Get_inf->other_products($id);
			
			$data['page']=$this->config->item('backendpro_template_shop').'chitietsp';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>