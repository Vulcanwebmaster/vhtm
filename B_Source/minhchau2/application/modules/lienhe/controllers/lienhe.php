<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			
			$this->load->model('Mlienhe');
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
			$data['query']=$this->Mlienhe->getRowByColumn('mc_contact_us','id',1);
			$data['listcate']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mlienhe->getListFull('mc_contact_us');
			$data['module']=$this->module;
					
			$data['page'] = 'vlienhe';
			$this->load->view('front/container',$data);
		}
	}
?>