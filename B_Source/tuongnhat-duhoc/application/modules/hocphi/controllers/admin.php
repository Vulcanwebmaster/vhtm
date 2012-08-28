<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mgioithieu');
		$this->load->helper('ckeditor');
	}
	
	function index()
	{
		$data['gioithieu']=$this->Mgioithieu->getGioiThieu();	 
		$data['module'] = $this->module;
		$data['page'] = "admin_gioithieu_home";
		$data['title'] = "Giới thiệu";
		$data['bcCurrent'] = "Giới thiệu";
		
		$data['ckeditor_1'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_1',
			'path'	=>	'assets/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"98%",	//Setting a custom width
				'height' 	=> 	"100px",	//Setting a custom height
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
 		$data['ckeditor_2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_2',
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
	
	function delete($id)
	{
		if($this->image_model->delete($id)==true)
		{
			redirect(base_url().'imagemanager/admin','refresh');
		}
	}

	function edit($id)
	{
		$this->Mgioithieu->update($id);
		redirect(base_url().'index.php/gioithieu/admin','refresh');
	}
	
}
?>