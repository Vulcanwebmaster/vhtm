<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		check('Control Panel');
		
		// Load the ADMIN asset group
		$this->bep_assets->load_asset_group('ADMIN');
		
		//Load library
		//customs
		$this->load->library('editor_library');
		$this->load->library('string_library');
		$this->load->library('paging_library');
		//system
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('date');
		
		//Load helper	
		$this->load->helper('form');
		$this->load->helper('language');
	}
	function PagingConfig($baseurl,$totalrow,$perpage,$urisegment){
		//Paging config
		$config['base_url'] = $baseurl;
		$config['total_rows'] = $totalrow;
		$config['per_page'] = $perpage; 
		$config['uri_segment'] = $urisegment;
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
		return $config;
	}
	
	function setupCKEditor($width='97%',$height='100px')
	{
		$config['toolbar'] = array(
			        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
			        array( 'Image', 'Link', 'Unlink', 'Anchor' )
			);
		$config['filebrowserBrowseUrl'] = base_url()."assets/minhchau2/ckeditor/ckfinder/ckfinder.html";
		$config['filebrowserImageBrowseUrl'] = base_url()."assets/minhchau2/ckeditor/ckfinder/ckfinder.html?type=Images";
		$config['filebrowserUploadUrl'] = base_url()."assets/minhchau2/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
		$config['filebrowserImageUploadUrl'] = base_url()."assets/minhchau2/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
		$config['toolbar']='Full';
		$config['width']=$width;
		$config['height']=$height;
		return $config;
	}
}

/* End of Admin_controller.php */
/* Location: ./system/application/libraries/Admin_controller.php */