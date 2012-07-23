<?php
class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mboutus');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('editor_library');
		$this->load->helper('text');
		$this->load->library('form_validation');
		
	}
	
	function index()
	{
		$config['base_url'] = base_url().'aboutus/admin/index';
		$config['total_rows'] = $this->Mboutus->getAboutRow();
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
		$data['listpaging']=$this->Mboutus->getDataAbout($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['slogan']=$this->Mboutus->getSlogan();
		$data['module'] = $this->module;
		$data['page'] = "admin_aboutus_vabout";
		$data['title'] = "About Us";
		
		//Breadcrumb data
		$data['bcCurrent'] = "About us";
		$this->load->view('admin/container',$data);
	}
	function getAbout() 
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_aboutus_vpostabout";
		$data['title'] = " About Us";
		//Breadcrumb data
		$data['bcLv1']= "About us";
		$data['bcLv1_link']= "aboutus/admin";
		$data['bcCurrent'] = "Post About Us";
		$this->load->view('admin/container',$data);
	}
	function getEditAbout() 
	{
		
		$data['module'] = $this->module;
		$data['page'] = "admin_aboutus_veditabout";
		$data['title'] = "About Us";
		$data['list']=$this->Mboutus->getDataAboutById();
		//Breadcrumb data
		$data['bcLv1']= "About us";
		$data['bcLv1_link']= "aboutus/admin";
		$data['bcCurrent'] = "Edit Article";				
		$this->load->view('admin/container',$data);
	}
	function editAbout()
	{
		if($this->Mboutus->editAbout()==true)
		{
				$this->index();			
		}
	}
	function delAboutus()
	{
		if($this->Mboutus->delAbout()==true)
		{
			redirect('aboutus/admin');
		}
	}
	function saveAbout()
	{
	if($this->Mboutus->saveAbout()==true)
		{
					
			redirect('aboutus/admin');
			
		}
	}
	function editSlogan()
	{
		if($this->Mboutus->editSlogan()==true)
		{
			redirect('aboutus/admin');
		}
	}
}
?>