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
	
	function setupCKEditor($id='')
	{
		$result=array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	$id,
			'path'	=>	'assets/bakery/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"97%",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
 
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
		return $result;
	}
}

/* End of Admin_controller.php */
/* Location: ./system/application/libraries/Admin_controller.php */