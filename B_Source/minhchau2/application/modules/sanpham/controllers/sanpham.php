<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
			$this->setLang();
			
			if ($this->session->userdata('lang')=='vn')
			{
				$this->lang->load('mc','vietnamese');
			}
			else $this->lang->load('mc','english');
		}
		
		function index()
		{
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Msanpham->getListFull('mc_product');
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);			
		}
		
		function chiTiet($id=0)
		{
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['info']=$this->Msanpham->getRowByColumn('mc_product','id',$id);
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
		function danhMuc($id_danhmuc=0)
		{
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Msanpham->getListByColumn('mc_product','category_id',$id_danhmuc);
			$data['category']=$this->Msanpham->getRowByColumn('mc_category','id',$id_danhmuc);
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
	}
?>