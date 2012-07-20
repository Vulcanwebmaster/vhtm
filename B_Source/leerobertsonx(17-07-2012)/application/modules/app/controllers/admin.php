<?php 
class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mapp');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('editor_library');
		$this->load->library('form_validation');
		$this->load->helper('text');
		$this->load->helper('string');
	}
	
	function index()
	{
		
		$config['base_url'] = base_url().'app/admin/index';
		$config['total_rows'] = $this->Mapp->getAppRow();
		$config['per_page'] = 5; 
		$config['uri_segment'] = 4;
		
		//Customizing the "Digit" Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		//Customizing the "Next" Link
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		//Customizing the "Previous" Link
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		//Customizing the First Link
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		//Customizing the Last Link
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		//Customizing the "Current Page" Link
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</li></a>';
		
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mapp->getdDataApp($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		//$data['list']=$this->Mapp->getcontactus();
		//$data['listuser']=$this->Mcontactus->getmessageuser();
		$data['module'] = $this->module;
		$data['page'] = "admin_app_vapplication";
		$data['title'] = "Application";
		
		//Breadcrumb data
		$data['bcCurrent'] = "Applications";
		$this->load->view('admin/container',$data);
	}
	function getPost()
	{
		
		$data['module'] = $this->module;
		$data['page'] = "admin_app_vpost";
		$data['title'] = "Applications - Add New Article";
		$data['list']=$this->Mapp->getDataAppById();
		
		//Breadcrumb data
		$data['bcLv1']= "Appplications";
		$data['bcLv1_link']= "app/admin";
		$data['bcCurrent'] = "Add New Article";
		$this->load->view('admin/container',$data);
	}
	function savePostApp()
	{
		if($this->Mapp->savePostApplication()==true)
		{
			redirect('app/admin');
		}
	}
	function getApp()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_app_veditapplication";
		$data['title'] = "Applications - Edit Article";
		//Breadcrumb data
		$data['bcLv1']= "Appplications";
		$data['bcLv1_link']= "app/admin";
		$data['bcCurrent'] = "Edit Article";
		$data['list']=$this->Mapp->getDataAppById();
		$this->load->view('admin/container',$data);
	}
	function editApp()
	{
		
		if($this->Mapp->editApp()==true)
		{	
			redirect('app/admin');	
		}
	}
	function delApp()
		{
			if($this->Mapp->delApp()==true)
			{
				redirect('app/admin');
			}
		}
}
?>