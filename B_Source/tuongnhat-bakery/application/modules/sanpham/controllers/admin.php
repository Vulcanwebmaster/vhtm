<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Msanpham');
			$this->load->library('editor_library');
		}
		
		function index()
		{
			//paging
			$baseurl = base_url().'sanpham/admin/index';
			$totalrow = $this->Msanpham->getProductRow();
			$perpage = 3;
			$urisegment = 4;
			$config = $this->PagingConfig($baseurl,$totalrow,$perpage,$urisegment);
			$this->pagination->initialize($config);
			$data['listpaging']=$this->Msanpham->getProducts($config['per_page'],$this->uri->segment(4));
			$data['paging'] = $this->pagination->create_links();
			//
			if(!$this->input->post('ajax_sanpham'))
			{
				$data['module']=$this->module;
				$data['page']="admin_sanpham_vsanpham";
				$data['title'] = "Products";
				//Breadcrumb data
				$data['bcCurrent'] = "Show Products";
				
				$this->load->view('admin/container',$data);
			}
			else {
				$this->load->view('admin/admin_sanpham_vsanpham_ajax',$data);
			}
			
		}
		function getDetailProduct()
		{
			$data['product']=$this->Msanpham->detailProduct();
			$data['module'] = $this->module;
			$data['title'] = "Detail Product";
			$data['page'] = "admin_sanpham_detailproduct";
			//Breadcrumb data
			$data['bcLv1']= "Product";
			$data['bcLv1_link']= "sanpham/admin";
			$data['bcCurrent'] = "Details Product";
			$this->load->view('admin/container',$data);
		}
		function updateProduct()
		{
			if($this->Msanpham->updateProduct()==TRUE)
			{
				redirect('sanpham/admin');
			}
			
		}
		function getInsertProduct()
		{
			//get category product
			$data['category']=$this->Msanpham->getCategoryProduct();
			$data['product']=$this->Msanpham->detailProduct();
			$data['module'] = $this->module;
			$data['title'] = "Detail Product";
			$data['page'] = "admin_sanpham_insert";
			//Breadcrumb data
			$data['bcLv1']= "Product";
			$data['bcLv1_link']= "sanpham/admin";
			$data['bcCurrent'] = "Insert Product";
			$this->load->view('admin/container',$data);
		}
		function insertProduct()
		{
			if($this->Msanpham->insertProduct()==TRUE)
			{
				redirect('sanpham/admin');
			}
		}
		function delProduct()
		{
			if($this->Msanpham->delProduct()==true)
			{
				redirect('sanpham/admin');
			}
		}
		
	}
?>