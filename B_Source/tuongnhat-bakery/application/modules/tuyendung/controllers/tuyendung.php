<?php
	class Tuyendung extends NIW_Controller
	{
		private $module;
		
		function __construct()
		{
			parent::__construct();
			
			$this->module=strtolower(get_class());
			$this->load->model('Mtuyendung');
			$this->load->library('pagination');
			
			$this->SetLangSession();
			
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
		}
		
		function index()
		{
			$this->pages();
		}
		
		function pages($index=0)
		{
			$config['base_url']=base_url().'tuyendung/paging';
			$config['uri_segment']=3;
			$config['total_rows']=$this->Mtuyendung->countFull();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mtuyendung->getList($index);
			$data['rightmenu']=$this->Mtuyendung->getRightColumn();
			$data['module']=$this->module;
			$data['page']='vtuyendung';
			$data['title']='Tuong Nhat Bakery - Tuyen dung';
			$this->load->view('front/container',$data);
		}
		
		function detail($id=0)
		{
			$data['info']=$this->Mtuyendung->GetDetailById($id);
			$data['page']='vdetail';
			$data['module']=$this->module;
			$this->load->view('front/container',$data);
		}
	}
?>