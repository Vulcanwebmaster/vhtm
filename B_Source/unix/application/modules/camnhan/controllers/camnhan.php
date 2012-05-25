<?php
	class Camnhan extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mcamnhan');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->pages();
		}
		
		function pages($index=0)
		{
			$config['base_url']=base_url().'index.php/camnhan/pages';
			$config['total_rows']=$this->Mcamnhan->count();
			$config['perpage']=5;
			
			$data['page']=$this->config->item('backendpro_template_shop').'vcamnhan';
			$data['module']=$this->module;
			$data['list']=$this->Mcamnhan->getList($index);
			$this->load->view($this->_container,$data); 
		}
	}
?>