<?php
	class Doitac extends NIW_Controller
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
			$this->load->model('Mdoitac');
			
			//Language:
			$this->SetLang();
		
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tn','vietnamese');
			else $this->lang->load('tn','english');
		}
		
		function index()
		{
			$data['page']='shop/vdoitac';
			$data['thoitrang']=$this->Mdoitac->getDT('Thương mại thời trang');
			$data['bakery']=$this->Mdoitac->getDT('Thương mại bakery');
			$data['duhoc']=$this->Mdoitac->getDT('Du học');
			$data['module']=$this->module;
			$this->load->view('front/container',$data);			
		}
		
	}
?>