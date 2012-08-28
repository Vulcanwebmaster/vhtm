<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mhocphi');
			$this->load->library('editor_library');
			$this->load->helper('ckeditor');
			//Load language:
			//$this->SetLang();		
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else 
				$this->lang->load('tuongnhat','english');
		}		
		function index()
		{
			//paging
			$baseurl = base_url().'hocphi/admin/index';
			$totalrow = $this->Mhocphi->getFeeRow();
			$perpage = 3;
			$urisegment = 4;
			$config = $this->PagingConfig($baseurl,$totalrow,$perpage,$urisegment);
			$this->pagination->initialize($config);
			$data['listpaging']=$this->Mhocphi->getFee($config['per_page'],$this->uri->segment(4));
			$data['paging'] = $this->pagination->create_links();
			//			
			if(!$this->input->post('ajax'))
			{
				$data['module']=$this->module;
				$data['page']="admin_hocphi_vhocphi";
				$data['title'] = $this->lang->line('hocphi-admin-product-hocphi');
				//Breadcrumb data
				$data['bcCurrent'] = $this->lang->line('hocphi-admin-product-hocphi');
				
				$this->load->view('admin/container',$data);
			}
			else {
				$this->load->view('admin/admin_hocphi_vhocphi_ajax',$data);
			}
			
		}
		function getUpdateFee()
		{			
			$data['product']=$this->Mhocphi->getDetailFee();
			$data['module'] = $this->module;
			$data['title'] = $this->lang->line('hocphi-admin-update-hocphi');
			$data['page'] = "admin_hocphi_vupdate";
			//Breadcrumb data
			$data['bcLv1']= $this->lang->line('hocphi-admin-product-hocphi');
			$data['bcLv1_link']= "hocphi/admin";
			$data['bcCurrent'] = $this->lang->line('hocphi-admin-update-hocphi');
			$this->load->view('admin/container',$data);
		}
		function updateFee()
		{
			if($this->Mhocphi->updateFee()==TRUE)
			{
				redirect('hocphi/admin');
			}
		}
		function getInsertFee()
		{						
			$data['module'] = $this->module;
			$data['title'] = $this->lang->line('hocphi-admin-insert-new');
			$data['page'] = "admin_hocphi_insert";
			//Breadcrumb data
			$data['bcLv1']= $this->lang->line('hocphi-admin-product-hocphi');
			$data['bcLv1_link']= "hocphi/admin";
			$data['bcCurrent'] = $this->lang->line('hocphi-admin-insert-new');
			$this->load->view('admin/container',$data);
		}
		function insertFee()
		{
			if($this->Mhocphi->insertFee()==true)
			{
				redirect('hocphi/admin');
			}
		}
		function delFee()
		{
			if($this->Mhocphi->delFee()==TRUE)
			{
				redirect('hocphi/admin');
			}
		}
}
?>