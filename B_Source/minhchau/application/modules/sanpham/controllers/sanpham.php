<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
			$this->setLang();
			$this->loadLang();
		}
		
		function index()
		{
			$data['lang']=$this->session->userdata("lang");
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Msanpham->getListFull('mc_product');
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function chiTiet($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['lang']=$this->session->userdata("lang");
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['info']=$this->Msanpham->getRowByColumn('mc_product','id',$id);
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
		function danhMuc($id_danhmuc=0)
		{
			$data['lang']=$this->session->userdata("lang");
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Msanpham->getListByColumn('mc_product','category_id',$id_danhmuc);
			$data['category']=$this->Msanpham->getRowByColumn('mc_category','id',$id_danhmuc);
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
	}
?>