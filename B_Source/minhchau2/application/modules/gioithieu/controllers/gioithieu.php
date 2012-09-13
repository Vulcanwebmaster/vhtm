<?php
	class Gioithieu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			
			$this->load->model('Mgioithieu');
			$this->load->library('session');
			$this->setLang();
			
			if ($this->session->userdata('lang')=='vn')
			{
				$this->lang->load('mc','vietnamese');
			}
			else $this->lang->load('mc','english');
		}
		
		function index()
		{
			$data['query']=$this->Mgioithieu->getRowByColumn('mc_about_us','id',1);
			$data['items']=$this->Mgioithieu->getListByColumn('mc_product','is_new',1);
			$data['parents']=$this->Mgioithieu->getListByColumn('mc_category','parent_id',0);
			$data['module']=$this->module;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
		}
	}
?>