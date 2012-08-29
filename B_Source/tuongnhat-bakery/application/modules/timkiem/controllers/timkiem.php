<?php
	class Timkiem extends NIW_controller {
	
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			
			$this->load->library('session');
			
			if ($this->session->userdata('lang')=='vn')
					$this->lang->load('tuongnhat','vietnamese');
				else
					$this->lang->load('tuongnhat','english');
			$this->load->model('Mtimkiem');
		}
		
		function SetLangSession()
		{
			if ($this->session->userdata('lang')=='')
			{
				$this->session->set_userdata('lang','vn');
			}
		}
		
		function doSearch()
		{
			$str=$this->input->post('search_theme_form');
			$lang=$this->session->userdata('lang');
			$data['list']=$this->Mtimkiem->searchByName($str,$lang);
			$data['rightmenu']=$this->Mtimkiem->getRightColumn();
			$data['page']='vtimkiem';
			$data['module']=$this->module;
			$this->load->view('front/container',$data);
		}
	}
?>