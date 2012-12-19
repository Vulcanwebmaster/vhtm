<?php
	class Langnghe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
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
		
		function detail($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$product_id = $temp[0];
			}
			$data['product']=$this->Mlangnghe->getListOffset('ln_product',5,0);
			$data['product_detail']=$this->Mlangnghe->getListOffset('ln_product',5,0);
			$data['village_detail']=$this->Mlangnghe->getRowByColumn('ln_village','village_id',$product_id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
	
	
	}