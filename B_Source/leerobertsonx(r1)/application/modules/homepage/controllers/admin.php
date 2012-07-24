<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mfrontpage');
		$this->load->helper('form');
		$this->load->library('editor_library');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->load->helper('date');
		
	}
	
	function index()
	{
		//Paging config
		$config['base_url'] = base_url().'homepage/admin/index';
		$config['total_rows'] = $this->Mfrontpage->getRowSlide();
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
		$data['listpaging']=$this->Mfrontpage->getSlidePaging($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		//End config Paging
		$data['slogan']=$this->Mfrontpage->getSlogan();
		$data['module'] = $this->module;
		$data['page'] = "admin_homepage_vslide";
		$data['title'] = "Slide";
		//Breadcrumb data
		$data['bcCurrent'] = "Slide";
		
		$this->load->view('admin/container',$data);
	}
	function getPostSlide()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_homepage_vpostslide";
		$data['title'] = "Slide";
		
		//Breadcrumb data
		$data['bcLv1']= "Post Slide";
		$data['bcLv1_link']= "homepage/admin";
		$data['bcCurrent'] = "Post Slide";		
		$this->load->view('admin/container',$data);
		
		
	}
	function savePostSlide()
	{
		if($this->Mfrontpage->saveSlide()==true)
		{
			redirect('homepage/admin');
		}
		
	}
	function getSlide()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_homepage_veditslide";
		$data['title'] = "Slide";
		
		//Breadcrumb data
		$data['bcLv1']= "Edit Slide";
		$data['bcLv1_link']= "homepage/admin";
		$data['bcCurrent'] = "Edit Slide";	
		$data['list']=$this->Mfrontpage->getSlideById();			
		$this->load->view('admin/container',$data);
	}
	function editSlide()
	{
		if($this->Mfrontpage->editSlide()==true)
		{
			
			redirect('homepage/admin');
		}
		
	}
	function delSlide()
	{
		if($this->Mfrontpage->delSlide()==true)
		{
			
			redirect('homepage/admin');
		}
		
	}
	function getEditSlogan()
	{
		if($this->Mfrontpage->editSlogan()==true)
			{
				
				redirect('homepage/admin');
			}
	}
	
}
