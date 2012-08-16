<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mcategorysanpham');
			$this->load->library('editor_library');
		}
		
		function index()
		{
			//paging
			$baseurl = base_url().'categorysanpham/admin/index';
			$totalrow = $this->Mcategorysanpham->getCategoryRow();
			$perpage = 3;
			$urisegment = 4;
			$config = $this->PagingConfig($baseurl,$totalrow,$perpage,$urisegment);
			$this->pagination->initialize($config);
			$data['listpaging']=$this->Mcategorysanpham->getCategory($config['per_page'],$this->uri->segment(4));
			$data['paging'] = $this->pagination->create_links();
			//
			if(!$this->input->post('ajax_category'))
			{
				$data['module']=$this->module;
				$data['page']="admin_category_vcategory";
				$data['title'] = "Category Products";
				//Breadcrumb data
				$data['bcCurrent'] = "Show Category";
				
				$this->load->view('admin/container',$data);
			}
			else {
				$this->load->view('admin/admin_category_vcategory_ajax',$data);
			}
			
		}
		function getUpdateCategory()
		{
			$data['product']=$this->Mcategorysanpham->getDetailCategory();
			$data['module'] = $this->module;
			$data['title'] = "Detail Category Product";
			$data['page'] = "admin_category_vupdate";
			//Breadcrumb data
			$data['bcLv1']= "Category Product";
			$data['bcLv1_link']= "categorysanpham/admin";
			$data['bcCurrent'] = "Details Category Product";
			$this->load->view('admin/container',$data);
		}
		function updateCategory()
		{
			if($this->Mcategorysanpham->updateCategory()==TRUE)
			{
				redirect('categorysanpham/admin');
			}
		}
		function getInsertCategory()
		{
			$data['module'] = $this->module;
			$data['title'] = "Insert Category Product";
			$data['page'] = "admin_category_insert";
			//Breadcrumb data
			$data['bcLv1']= "Category Product";
			$data['bcLv1_link']= "categorysanpham/admin";
			$data['bcCurrent'] = "Insert Category Product";
			$this->load->view('admin/container',$data);
		}
		function insertCategory()
		{
			if($this->Mcategorysanpham->insertCategory()==true)
			{
				redirect('categorysanpham/admin');
			}
		}
		function delCategory()
		{
			if($this->Mcategorysanpham->delCategory()==TRUE)
			{
				redirect('categorysanpham/admin');
			}
		}
}
?>