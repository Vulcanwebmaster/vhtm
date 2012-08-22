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
			$this->load->library('pagination');
			$this->load->helper('ckeditor');
		}
		
		function index()
		{
			$this->paging();
		}
		
		//================== PRODUCT ===========================================
		function paging($index=0)
		{
			$config['base_url']=base_url().'sanpham/admin/paging';
			$config['uri_segment']=4;
			$config['total_rows']=$this->Msanpham->countFullProduct();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Msanpham->getListProduct($index);
			$data['module']=$this->module;
			$data['page']='admin-list-product';
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$this->load->view('admin/container',$data);
		}
		
		function editProductById($id=0)
		{
			$data['motav']=$this->setupCKEditor('motav');
			$data['motae']=$this->setupCKEditor('motae');
			$data['huongdanv']=$this->setupCKEditor('huongdanv');
			$data['huongdane']=$this->setupCKEditor('huongdane');
			$data['lodoiluuv']=$this->setupCKEditor('lodoiluuv');
			$data['lodoiluue']=$this->setupCKEditor('lodoiluue');
			$data['loquayv']=$this->setupCKEditor('loquayv');
			$data['loquaye']=$this->setupCKEditor('loquaye');
			$data['dinhduongv']=$this->setupCKEditor('dinhduongv');
			$data['dinhduonge']=$this->setupCKEditor('dinhduonge');
			$data['hinhanh']=$this->setupCKEditor('hinhanh');
			
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$data['info']=$this->Msanpham->GetDetailProductById($id);
			$data['page']='admin-edit-product';
			$data['module']=$this->module;
			$this->load->view('admin/container',$data);
		}
	}
?>