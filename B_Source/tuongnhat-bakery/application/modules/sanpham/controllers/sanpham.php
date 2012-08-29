<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Msanpham');
			$this->SetLangSession();
			
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
		}

		function index()
		{		
			$data['rightmenu']=$this->Msanpham->getRightColumn();
			$data['list']=$this->Msanpham->GetListCate();
			$data['title']='Tuong Nhat Bakery - San pham';
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function detail($id=0)
		{
			$data['rightmenu']=$this->Msanpham->getRightColumn();
			$data['info']=$this->Msanpham->GetCategoryById($id);
			$data['relate_products']=$this->Msanpham->GetProductByCategoryId($id);
			$data['module']=$this->module;
			$data['page']='vdetail-category';
			$this->load->view('front/container',$data);
		}
		
		function detail_product($product_id=0)
		{
			$data['rightmenu']=$this->Msanpham->getRightColumn();
			$data['detail_product']=$this->Msanpham->GetDetailProductById($product_id);
			$data['module']=$this->module;
			$data['page']='vdetail-product';
			$this->load->view('front/container',$data);
		}
		
		function new_products()
		{
			$data['rightmenu']=$this->Msanpham->getRightColumn();
			$data['list']=$this->Msanpham->GetListNew();
			$data['module']=$this->module;
			$data['page']='vnew-list';
			$this->load->view('front/container',$data);
		}
	}
?>