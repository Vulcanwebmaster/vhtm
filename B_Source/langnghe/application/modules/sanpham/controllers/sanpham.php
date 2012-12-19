<?php
	class Sanpham extends NIW_Controller
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
			$this->load->model('Msanpham');
			$this->load->library('session');
			$this->load->helper('text');
		}

		function index($index=0)
		{
				$config['base_url'] = base_url().'sanpham/index';
				$config['per_page'] = 4;
				$config['total_rows'] = count($this->Msanpham->getListFull('ln_product'));
				$this->pagination->initialize($config);
				$data['product']=$this->Msanpham->getListOffset('ln_product',5,0);
				$data['items'] = $this->Msanpham->getListOffset('ln_product',4,$index);
				$data['module'] = $this->module;
				$data['page'] ='vsanpham';
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
			$data['product']=$this->Msanpham->getListOffset('ln_product',5,0);
			$data['product_detail']=$this->Msanpham->getRowByColumn('ln_product','product_id',$product_id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
	
	}