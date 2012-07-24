<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mlastestproject','mject');
		$this->load->helper('form');
		$this->load->library('editor_library');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->load->helper('date');
		
	}
	
	function index()
	{
		//Paging config
		$config['base_url'] = base_url().'lastestproject/admin/index';
		$config['total_rows'] = $this->mject->getRowLogo();
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
		$data['listpaging']=$this->mject->getLogoPaging($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		//End config Paging
		
		$data['module'] = $this->module;
		$data['page'] = "admin_lastestproject_vproject";
		$data['title'] = "Lastest Project";
		//Breadcrumb data
		$data['bcCurrent'] = "Lastest Projecte";
		
		$this->load->view('admin/container',$data);
	}
	function getPostProject()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_lastestproject_vpost";
		$data['title'] = "Lastest Project";
		
		//Breadcrumb data
		$data['bcLv1']= "Post Logo";
		$data['bcLv1_link']= "lastestproject/admin";
		$data['bcCurrent'] = "Post SlidLogoe";		
		$this->load->view('admin/container',$data);
	}
	function savePostLogo()
	{
		if($this->mject->saveLogo()==true)
		{
			redirect('lastestProject/admin');	
		}
	}
	function getProject()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_lastestproject_vedit";
		$data['title'] = "Lastest Project";
		
		//Breadcrumb data
		$data['bcLv1']= "Edit Logo";
		$data['bcLv1_link']= "lastestproject/admin";
		$data['bcCurrent'] = "Edit Logo";
		$data['list']=$this->mject->getLogoById();		
		$this->load->view('admin/container',$data);
	}
	function editLogo()
	{
		if($this->mject->editLogo()==true)
		{
			redirect('lastestProject/admin');	
		}
	}
	function delProject()
	{
		if($this->mject->delLogo()==true)
		{
			redirect('lastestProject/admin');	
		}
	}
}
?>
