<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends  Admin_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->helper('ckeditor');
		//Load model
		$this->load->model('Mlienhe');
		//Load language:
		if ($this->session->userdata('lang')=='vn')
			$this->lang->load('tuongnhat','vietnamese');
		else 
			$this->lang->load('tuongnhat','english');
	}
	
	
	function edit($id)
	{
		if($this->input->post('submit'))
		{
			if($this->Mlienhe->update($id))
			{
				echo '<script language=javascript>
							alert("Update Success !");
						</script>';
				redirect(base_url().'index.php/lienhe/admin','refresh');
			}
			else 
			{
				echo '<script language=javascript>
							alert("Update Fail !");
						</script>';
				redirect(base_url().'index.php/lienhe/admin','refresh');
			}
		}
	}
	function index()
	{
		$data['lienhe']=$this->Mlienhe->getLienHe();	 
		$data['module'] = $this->module;
		$data['page'] = "admin_lienhe_home";
		$data['title'] = "Liên hệ";
		$data['bcCurrent'] = "Liên hệ";
		
 		$data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'email',
			'path'	=>	'assets/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"98%",	//Setting a custom width
				'height' 	=> 	"200px",	//Setting a custom height
 				'filebrowserBrowseUrl'      => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
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
	
	/*function index()
	{
		$data['address_vn']=$this->setupCKEditor('address_vn');
		$data['address_en']=$this->setupCKEditor('address_en');
		$data['info_vn']=$this->setupCKEditor('info_vn');
		$data['info_en']=$this->setupCKEditor('info_en');
			
		$data['module'] = $this->module;
		$data['page'] = "admin_lienhe";
		$data['title'] = $this->lang->line('contact-contact');
		$data['formData']=$this->Mlienhe->getFormData();
		
		//Breadcrumb data
		$data['bcCurrent'] = $this->lang->line('contact-contact');
				
		$this->load->view('admin/container',$data);		
	}*/
	function saveContactUs()
	{
		if($this->Mlienhe->saveContactUs()==true)
		{
			redirect('lienhe/admin');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/modules/contactus/controllers/admin.php */