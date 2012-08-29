<?php
	class Rightmenu extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->SetLangSession();
			
			$this->load->model('Mrightmenu');
			
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
		}
		
		function index()
		{
			redirect(base_url(),'refresh');
		}

		function detail($id=0)
		{
			$data['rightmenu']=$this->Mrightmenu->getRightColumn();
			$data['info']=$this->Mrightmenu->GetDetailById($id);
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	}
?>