<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mcategories');
		$this->load->library('pagination');
		$this->load->helper('form');
		$this->load->library('editor_library');
		$this->load->helper('text');
		
	}
	
	function index()
	{
		//Paging config
		$config['base_url'] = base_url().'example/admin/index';
		$config['total_rows'] = $this->Mcategories->getWhyUsRow();
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
		//End config Paging
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mcategories->getWhyUs($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['listhelp']=$this->Mcategories->getDataHelp();
		$data['listimage']=$this->Mcategories->getImage();
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vcategories";
		$data['title'] = "Categories";
		
		
		//Breadcrumb data
		//$data['bcLv1']= "Categories";
		//$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Categories";
		
		$this->load->view('admin/container',$data);
	}
	function getWhyUs()
	{
		//Paging config
		$config['base_url'] = base_url().'example/admin/getWhyUs/';
		$config['total_rows'] = $this->Mcategories->getWhyUsRow();
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
		//End config Paging
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mcategories->getWhyUs($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_whyus";
		$data['title'] = "Categories";
		//Breadcrumb data
		$data['bcLv1']= "Categories";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Why Us";
		$this->load->view('admin/container',$data);
	}
	function getPostWhyUs()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vpost";
		$data['title'] = "Categories";
		
		//Breadcrumb data
		$data['bcLv1']= "Why us";
		$data['bcLv1_link']= "example/admin/getWhyUs";
		$data['bcCurrent'] = "Post Why Us";				
		$this->load->view('admin/container',$data);
		
	}
	function postWhyUs(){
		if($this->Mcategories->insertWhyUs()==true)
		{
			redirect('example/admin');
		}
	}
	function delWhyUs()
	{
		if($this->Mcategories->delWhyUs()==true)
		{
			redirect('example/admin');
		}
	}
	function getEditWhyUs()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_edit";
		$data['title'] = "Categories";
		$data['list']=$this->Mcategories->getEditWhyUs();
		//Breadcrumb data
		$data['bcLv1']= "Edit Why Us";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Edit Why Us";				
		$this->load->view('admin/container',$data);
	
		
	}
	function editWhyUs()
	{
		if($this->Mcategories->editWhyUs()==true)
		{
			echo '<script type=text/javascript>
				alert("update success");
			</script>
			';
			redirect('example/admin');
		}
		else 
		{
			echo '<script type=text/javascript>
				alert("update unsuccess");
			</script>
			';
			redirect('example/admin');
		}
		
	}
	function getHelp()
	{
		//Paging config
		$config['base_url'] = base_url().'example/admin/getHelp/';
		$config['total_rows'] = $this->Mcategories->getHelpRow();
		$config['per_page'] = 2; 
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
		//End config Paging
		//End config Paging
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mcategories->getHelp($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vhelp";
		$data['title'] = "Categories";
		
		
		//Breadcrumb data
		$data['bcLv1']= "Categories";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Help";				
		$this->load->view('admin/container',$data);
		
	}
	function getPostHelp()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vposthelp";
		$data['title'] = "Categories";
		//Breadcrumb data
		$data['bcLv1']= "Help";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Post Help";				
		$this->load->view('admin/container',$data);
	}
	function postHelp()
	{
		if($this->Mcategories->postHelp()==true)
		{
			redirect('example/admin/getHelp');
		}
	}
	function delHelp()
	{
		if($this->Mcategories->delHelp()==true)
		{
			redirect('example/admin/getHelp');
		}
	}
	function getEditHelp()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_edithelp";
		$data['title'] = "Categories";
		$data['list']=$this->Mcategories->getEditHelp();
		//Breadcrumb data
		$data['bcLv1']= "Help";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Edit Help";				
		$this->load->view('admin/container',$data);
	}
	function editHelp()
	{
		if($this->Mcategories->editHelp()==true)
		{
			echo '<script type=text/javascript>
				alert("update success");
			</script>
			';
			redirect('example/admin/getHelp');
		}
		else 
		{
			echo '<script type=text/javascript>
				alert("update unsuccess");
			</script>
			';
			redirect('example/admin');
		}
		
	}
	function getEditImage()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_image";
		$data['title'] = "Categories";
		$data['listimage']=$this->Mcategories->getEditImage();
		//Breadcrumb data
		$data['bcLv1']= "Slide";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Edit Image";				
		$this->load->view('admin/container',$data);
	}
	function editImage()
	{
	if($this->Mcategories->editImage()==true)
		{
			echo '<script type=text/javascript>
				alert("update success");
			</script>
			';
			redirect('example/admin/getImageSlide');
		}
		else 
		{
			echo '<script type=text/javascript>
				alert("update unsuccess");
			</script>
			';
			redirect('example/admin/getImageSlide');
		}
	}
	function getImageSlide()
	{
		//Paging config
		$config['base_url'] = base_url().'example/admin/getImageSlide/';
		$config['total_rows'] = $this->Mcategories->getImageRow();
		$config['per_page'] = 5; 
		$config['uri_segment'] = 4;
		//End config Paging
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mcategories->getDataImage($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vslide";
		$data['title'] = "Categories";
		
		
		//Breadcrumb data
		$data['bcLv1']= "Categories";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "ImageSlide";				
		$this->load->view('admin/container',$data);
	}
	function getPostImage()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vpostimage";
		$data['title'] = "Categories";
		$data['listimage']=$this->Mcategories->getEditImage();
		//Breadcrumb data
		$data['bcLv1']= "Edit Image";
		$data['bcLv1_link']= "example/admin";
		$data['bcCurrent'] = "Edit Image";				
		$this->load->view('admin/container',$data);
	}
	function postImage() {
		if($this->Mcategories->postImage()==true)
		{
			redirect('example/admin/getImageSlide');
		}
	}
	function delImage()
	{
		if($this->Mcategories->delImage()==true)
		{
			redirect('example/admin/getImageSlide');
		}
	}
}


	
?>