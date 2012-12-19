<?php
	class Langnghe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->helper('url');
			$this->load->model('Mlangnghe');
			$this->load->library('session');
			$this->load->helper('text');
		}

		function index($index=0)
		{
				$config['base_url'] = base_url().'langnghe/index';
				$config['per_page'] = 4;
				$config['total_rows'] = count($this->Mlangnghe->getListFull('ln_village'));
				$this->pagination->initialize($config);
				$data['product']=$this->Mlangnghe->getListOffset('ln_product',5,0);
				$data['items'] = $this->Mlangnghe->getListOffset('ln_village',4,$index);
				$data['module'] = $this->module;
				$data['page'] ='vlangnghe';
				$this->load->view('front/container',$data);	
		}
	
	
	}