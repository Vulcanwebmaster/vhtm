<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mlaytintudong');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/niwcom/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Tin tức';
			$data['bcCurrent']='Tin tức';
			$data['module']=$this->module;
			$this->session->set_userdata('result','Lấy tin tức thành công!!!');
			$data['page']='xemtin';
			$this->load->view('admin/container',$data);
		}
		
		
	}
?>