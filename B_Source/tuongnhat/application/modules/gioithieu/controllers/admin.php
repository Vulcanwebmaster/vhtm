<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->helper('ckeditor');
		//Load model
		$this->load->model('Mgioithieu');
		//Load language:
		$this->SetLang();		
		if ($this->session->userdata('lang')=='vn')
			$this->lang->load('tn','vietnamese');
		else 
			$this->lang->load('tn','english');
	}
	
	function index()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_gioithieu";
		$data['title'] = $this->lang->line('gioithieu-admin-aboutus');
		$data['formData']=$this->Mgioithieu->getFormData();
		
		//Breadcrumb data
		$data['bcCurrent'] = $this->lang->line('gioithieu-admin-aboutus');
		
		//get text editor
		//Ckeditor's configuration
		$data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'gt_content',
			'path'	=>	'assets/tuongnhat/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"",	//Setting a custom width
				'height' 	=> 	"",	//Setting a custom height
 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
 		$data['ckeditor_2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'gt_contentEng',
			'path'	=>	'assets/tuongnhat/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"",	//Setting a custom width
				'height' 	=> 	"",	//Setting a custom height
 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);

		
		$this->load->view('admin/container',$data);		
	}
	function saveSlogan()
	{
		if($this->Mgioithieu->saveslogan()==true)
		{
			redirect('gioithieu/admin');
		}
	}
	function saveColumn1()
	{
		if($this->Mgioithieu->saveColumn1()==true)
		{
			redirect('gioithieu/admin');
		}
	}
	
	function saveColumn2()
	{
		if($this->Mgioithieu->saveColumn2()==true)
		{
			redirect('gioithieu/admin');
		}
	}

	function saveColumn3()
	{
		if($this->Mgioithieu->saveColumn3()==true)
		{
			redirect('gioithieu/admin');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/modules/contactus/controllers/admin.php */