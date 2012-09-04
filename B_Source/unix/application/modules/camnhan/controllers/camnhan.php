<?php
	class Camnhan extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('MCamnhan');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->pages();
		}
		
		function pages($index=0)
		{
			$config['base_url']=base_url().'index.php/camnhan/pages';
			$config['total_rows']=$this->MCamnhan->count();
			$config['per_page']=5;
			$this->pagination->initialize($config);
			
			$data['page']=$this->config->item('backendpro_template_shop').'vcamnhan';
			$data['module']=$this->module;
			$data['list']=$this->MCamnhan->getList($index);
			$data['tieude']="CẢM NHẬN";
			$this->load->view($this->_container,$data); 
		}
	}
?>