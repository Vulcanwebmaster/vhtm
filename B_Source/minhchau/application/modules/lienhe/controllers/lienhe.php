<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
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
			$this->session->set_userdata('lang','vn');
			
			if($this->session->userdata('lang')=='en')
			{
				$data['query'] = $this->Mlienhe->getOne()->contente;
				$data['title'] = 'About us';
			}
			elseif ($this->session->userdata('lang')=='vn')
			{
				$data['query'] = $this->Mlienhe->getOne()->contentv;
				$data['title'] = 'Liên Hệ';
			}
			$data['listcate']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mlienhe->getListFull('mc_contact_us');
			$data['module']=$this->module;
					
			$data['page'] = 'vlienhe';
			$this->load->view('front/container',$data);
		}
	}
?>