<?php 
	class Admin extends Admin_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mlienhe');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'lienhe/admin/page';
			$config['per_page']=6;
			$config['uri_segment']='4';
			$config['total_rows']=$this->Mlienhe->CountFull();
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mlienhe->GetList($index);
			$data['bcCurrent'] = "Liên hệ";
			$data['title'] = "Liên hệ";
			$data['module']=$this->module;
			$data['page']='vlienhe_admin_list';
			$this->load->view('admin/container',$data);
		}
	}
?>