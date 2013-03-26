<?php
	class Gioithieu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgioithieu');
			$this->load->library('session');
			$this->setLang();
			$this->loadLang();
		}
		
		function index()
		{
			$data['lang']=$this->session->userdata("lang");
			$data['detail_gt']=$this->Mgioithieu->getRowByColumn('mc_about_us','id',1);
			$data['listcate']=$this->Mgioithieu->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mgioithieu->getListFull('mc_about_us');
			$data['module']=$this->module;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
		}
	}
?>