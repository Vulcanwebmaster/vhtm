<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Msanpham');
			$this->load->library('session');
		}

		function index()
		{
			$data['list_tuvan']=$this->Msanpham->getListFull('tuvansanpham');
			$this->load->helper('text');
			$data['parents']=$this->Msanpham->getListByColumn('xh_category','parent_id',0);
			$data['items']=$this->Msanpham->getListFull('xh_product');		
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);			
		}
		
		function chitiet($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$category_id = $temp[0];
				$product_id = $temp[1];
			}
			$data['list_tuvan']=$this->Msanpham->getListFull('tuvansanpham');
			$data['category']=$this->Msanpham->getRowByColumn('xh_category','id',$category_id);
			$data['product']=$this->Msanpham->getRowByColumn('xh_product','id',$product_id);
			$data['parents']=$this->Msanpham->getListByColumn('xh_category','parent_id',0);
			//$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			//$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			//$data['list_doitac']=$this->Msanpham->getListFull('doitac');	
			$data['detail']=$this->Msanpham->getRowByColumn('xh_product','id',$product_id);
			
			$model=new CI_Model();
			
			$data['module']=$this->module;
			// Lấy dl từ $data['detail'] (dòng trên)
			$category_id1=$data['detail']->category_id;
			//var_dump($data['detail']->category_id);die();
			$data['relates']=$this->Msanpham->getListByColumnOffset('xh_product','category_id',$category_id1,0,6);
			
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
	
	}
