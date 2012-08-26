<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends  Admin_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->helper('ckeditor');
		//Load model
		$this->load->model('Mlienhe');
		//Load language:
		if ($this->session->userdata('lang')=='vn')
			$this->lang->load('tuongnhat','vietnamese');
		else 
			$this->lang->load('tuongnhat','english');
	}
	
	function index()
	{
		$data['address_vn']=$this->setupCKEditor('address_vn');
		$data['address_en']=$this->setupCKEditor('address_en');
		$data['info_vn']=$this->setupCKEditor('info_vn');
		$data['info_en']=$this->setupCKEditor('info_en');
			
		$data['module'] = $this->module;
		$data['page'] = "admin_lienhe";
		$data['title'] = $this->lang->line('contact-contact');
		$data['formData']=$this->Mlienhe->getFormData();
		
		//Breadcrumb data
		$data['bcCurrent'] = $this->lang->line('contact-contact');
				
		$this->load->view('admin/container',$data);		
	}
	function saveContactUs()
	{
		if($this->Mlienhe->saveContactUs()==true)
		{
			redirect('lienhe/admin');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/modules/contactus/controllers/admin.php */