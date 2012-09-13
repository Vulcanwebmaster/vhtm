<?php
	class Gioithieu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
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
			//$this->session->set_userdata('lang','vn');
			
			if($this->session->userdata('lang')=='en')
			{
				$data['query'] = $this->Mgioithieu->getOne()->contente;
				$data['title'] = 'About us';
			}
			elseif ($this->session->userdata('lang')=='vn')
			{
				$data['query'] = $this->Mgioithieu->getOne()->contentv;
				$data['title'] = 'Giới thiệu';
			}
			$data['listcate']=$this->Mgioithieu->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mgioithieu->getListFull('mc_about_us');
			$data['module']=$this->module;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
		}
	}
?>