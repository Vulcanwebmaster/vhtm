<?php
	class Tintuc extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mtintuc');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->pages();
		}
		
		function pages($index=0)
		{
			$config['base_url']=base_url().'/index.php/tintuc/pages';
			$config['total_rows']=$this->Mtintuc->count();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mtintuc->loadListNews($index);
			$data['page']=$this->config->item('backendpro_template_shop').'vtintuc';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function detail($alias=0)
		{
			$data['newest']=$this->Mtintuc->getNewestNews($alias);
			if ($this->Mtintuc->getDetailByAlias($alias))
				$data['info']=$this->Mtintuc->getDetailByAlias($alias);
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>