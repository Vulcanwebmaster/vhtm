<?php
	class Gioithieu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('session');
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tn','vietnamese');
			else
				$this->lang->load('tn','english');
			
			//Load model
			$this->load->model('Mgioithieu');
			
			//Language:
			$this->SetLang();
		
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tn','vietnamese');
			else $this->lang->load('tn','english');
		}
		
		function index()
		{
			$data['page']='vgioithieu';
			$data['module']=$this->module;
			$data['formData']=$this->Mgioithieu->getFormData();
			$this->load->view('front/container',$data);			
		}
		
	}
?>
