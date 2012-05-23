<?php
	class Hoithao extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhoithao');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->pages(0);
		}
		
		function pages($start=0)
		{
			$full=count($this->Mhoithao->full());
			$config['base_url']=base_url()."index.php/hoithao/pages";
			$config['per_page']=6;
			$config['total_rows']=$full;
			$this->pagination->initialize($config);
			
			$data['page']=$this->config->item('backendpro_templage_shop').'vhoithao';
			$data['module']=$this->module;
			$data['list']=$this->Mhoithao->getList($start);
			$this->load->view($this->_container,$data);
		}
	}
?>