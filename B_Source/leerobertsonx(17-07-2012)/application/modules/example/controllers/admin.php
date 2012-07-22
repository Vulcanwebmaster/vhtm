<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mcategories');
		$this->load->helper('form');
		$this->load->library('editor_library');
		$this->load->helper('text');
		
	}
	
	function index()
	{
		//Paging config
		
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
		$data['list']=$this->Mcategories->getDataWhyUs();
		$data['listhelp']=$this->Mcategories->getDataHelp();
		$data['listimage']=$this->Mcategories->getImage();
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_vcategories";
		$data['title'] = "Categories";
		
		
		//Breadcrumb data
		
		$data['bcCurrent'] = "Categories";
		
		$this->load->view('admin/container',$data);
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
	function getEditHelp()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_edithelp";
		$data['title'] = "Categories";
		$data['list']=$this->Mcategories->getEditHelp();
		//Breadcrumb data
		$data['bcLv1']= "Edit Why Us";
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
	function getEditImage()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_categories_image";
		$data['title'] = "Categories";
		$data['listimage']=$this->Mcategories->getEditImage();
		//Breadcrumb data
		$data['bcLv1']= "Edit Image";
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
}


	
?>