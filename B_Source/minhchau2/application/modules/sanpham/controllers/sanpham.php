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
			$this->setLang();
			
			if ($this->session->userdata('lang')=='vn')
			{
				$this->lang->load('mc','vietnamese');
			}
			else $this->lang->load('mc','english');
		}

		function index()
		{
			$data['parents']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['items']=$this->Msanpham->getListFull('mc_product');
			$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			$data['list_doitac']=$this->Msanpham->getListFull('doitac');			
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);			
		}
		
		function view($category_id)
		{
			$data['query']=$this->Msanpham->getRowByColumn('mc_category','id',$category_id);
			$data['parents']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['items']=$this->Msanpham->getListByColumn('mc_product','category_id',$category_id);
			$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			$data['list_doitac']=$this->Msanpham->getListFull('doitac');			
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

			$data['category']=$this->Msanpham->getRowByColumn('mc_category','id',$category_id);
			$data['product']=$this->Msanpham->getRowByColumn('mc_product','id',$product_id);
			$data['parents']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			$data['list_doitac']=$this->Msanpham->getListFull('doitac');	
			$data['detail']=$this->Msanpham->getRowByColumn('mc_product','id',$product_id);
			
			$model=new CI_Model();
			
			$data['module']=$this->module;
			// Lấy dl từ $data['detail'] (dòng trên)
			$category_id1=$data['detail']->category_id;
			//var_dump($data['detail']->category_id);die();
			$data['relates']=$this->Msanpham->getListByColumnOffset('mc_product','category_id',$category_id1,0,6);
			
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
		function danhMuc($id_danhmuc=0)
		{
			$data['listcate']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Msanpham->getListByColumn('mc_product','category_id',$id_danhmuc);
			$data['category']=$this->Msanpham->getRowByColumn('mc_category','id',$id_danhmuc);
			$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			$data['list_doitac']=$this->Msanpham->getListFull('doitac');			
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
	}
?>