<?php
	class Gioithieu extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('MGioithieu');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->pages();
		}
		
		function pages()
		{		
			$data['tieude']="GIỚI THIỆU";		
			$data['list']=$this->MGioithieu->loadListFull();
			$data['page']=$this->config->item('backendpro_template_shop').'vgioithieu';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		

	}
?>