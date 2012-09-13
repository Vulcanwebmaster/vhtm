<?php
	class Dichvu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdichvu');
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
			//$this->session->set_userdata('lang','vn');
			
			if($this->session->userdata('lang')=='en')
			{
				$data['query'] = $this->Mdichvu->getOne()->contente;
				$data['title'] = 'Our Services';
			}
			elseif ($this->session->userdata('lang')=='vn')
			{
				$data['query'] = $this->Mdichvu->getOne()->contentv;
				$data['title'] = 'Dịch vụ';
			}
			$data['listcate']=$this->Mdichvu->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mdichvu->getListFull('mc_about_us');
			$data['module']=$this->module;
			$data['page']='vdichvu';
			$this->load->view('front/container',$data);
		}
	}
?>