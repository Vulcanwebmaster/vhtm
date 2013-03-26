<?php
	class Dichvu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdichvu');
			$this->load->library('session');
			$this->setLang();
			$this->loadLang();
		}
		
		function index()
		{
			//$this->session->set_userdata('lang','vn');
			$data['lang']=$this->session->userdata("lang");
			$data['detail_dv']=$this->Mdichvu->getRowByColumn('mc_services','id',1);
			$data['listcate']=$this->Mdichvu->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mdichvu->getListFull('mc_about_us');
			$data['module']=$this->module;
			$data['page']='vdichvu';
			$this->load->view('front/container',$data);
		}
	}
?>