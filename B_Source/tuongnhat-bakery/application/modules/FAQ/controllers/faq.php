<?php
	class Faq extends NIW_Controller
	{
		private $module;
		
		function __construct()
		{
			parent::__construct();
			
			$this->module=strtolower(get_class());
			$this->load->model('Mfaq');
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
			$config['base_url']=base_url().'faq/paging';
			$config['uri_segment']=3;
			$config['total_rows']=$this->Mfaq->countFull();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['rightmenu']=$this->Mfaq->getRightColumn();
			$data['list']=$this->Mfaq->getList($index);
			$data['module']=$this->module;
			$data['page']='vfaq';
			$data['title']='Tuong Nhat Bakery - FAQ';
			$this->load->view('front/container',$data);
		}
		
		function detail($id=0)
		{
			$data['info']=$this->Mfaq->GetDetailById($id);
			$data['page']='vdetail';
			$data['module']=$this->module;
			$this->load->view('front/container',$data);
		}
	}
?>