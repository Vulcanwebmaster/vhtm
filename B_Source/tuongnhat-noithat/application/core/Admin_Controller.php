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
		$config['filebrowserBrowseUrl'] = base_url()."assets/tuongnhatp2/ckeditor/ckfinder/ckfinder.html";
		$config['filebrowserImageBrowseUrl'] = base_url()."assets/tuongnhatp2/ckeditor/ckfinder/ckfinder.html?type=Images";
		$config['filebrowserUploadUrl'] = base_url()."assets/tuongnhatp2/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
		$config['filebrowserImageUploadUrl'] = base_url()."assets/tuongnhatp2/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
		$config['toolbar']='Full';
		$config['width']=$width;
		$config['height']=$height;
		return $config;
	}
		/*  -------Bỏ dấu làm Alias------------ */
	function getAliasByName($name)
	{
		$name = strtolower($name);
		$name=str_replace('á', 'a', $name);
		$name=str_replace('à', 'a', $name);
		$name=str_replace('ạ', 'a', $name);
		$name=str_replace('ả', 'a', $name);
		$name=str_replace('ã', 'a', $name);
		
		$name=str_replace('ă', 'a', $name);
		$name=str_replace('ắ', 'a', $name);
		$name=str_replace('ằ', 'a', $name);
		$name=str_replace('ặ', 'a', $name);
		$name=str_replace('ẳ', 'a', $name);
		$name=str_replace('ẵ', 'a', $name);
		
		$name=str_replace('â', 'a', $name);
		$name=str_replace('ấ', 'a', $name);
		$name=str_replace('ầ', 'a', $name);
		$name=str_replace('ậ', 'a', $name);
		$name=str_replace('ẩ', 'a', $name);
		$name=str_replace('ẫ', 'a', $name);
		
		$name=str_replace('ó', 'o', $name);
		$name=str_replace('ò', 'o', $name);
		$name=str_replace('ọ', 'o', $name);
		$name=str_replace('ỏ', 'o', $name);
		$name=str_replace('õ', 'o', $name);
		
		$name=str_replace('ô', 'o', $name);
		$name=str_replace('ố', 'o', $name);
		$name=str_replace('ồ', 'o', $name);
		$name=str_replace('ộ', 'o', $name);
		$name=str_replace('ổ', 'o', $name);
		$name=str_replace('ỗ', 'o', $name);
		$name=str_replace('ô', 'o', $name);
		
		$name=str_replace('ơ', 'o', $name);
		$name=str_replace('ớ', 'o', $name);
		$name=str_replace('ờ', 'o', $name);
		$name=str_replace('ợ', 'o', $name);
		$name=str_replace('ở', 'o', $name);
		$name=str_replace('ỡ', 'o', $name);
		
		$name=str_replace('é', 'e', $name);
		$name=str_replace('è', 'e', $name);
		$name=str_replace('ẹ', 'e', $name);
		$name=str_replace('ẻ', 'e', $name);
		$name=str_replace('ẽ', 'e', $name);
		
		$name=str_replace('ê', 'e', $name);
		$name=str_replace('ế', 'e', $name);
		$name=str_replace('ề', 'e', $name);
		$name=str_replace('ệ', 'e', $name);
		$name=str_replace('ể', 'e', $name);
		$name=str_replace('ễ', 'e', $name);
		
		$name=str_replace('í', 'i', $name);
		$name=str_replace('ì', 'i', $name);
		$name=str_replace('ị', 'i', $name);
		$name=str_replace('ỉ', 'i', $name);
		$name=str_replace('ĩ', 'i', $name);
		
		$name=str_replace('ú', 'u', $name);
		$name=str_replace('ù', 'u', $name);
		$name=str_replace('ụ', 'u', $name);
		$name=str_replace('ủ', 'u', $name);
		$name=str_replace('ũ', 'u', $name);
		
		$name=str_replace('ứ', 'u', $name);
		$name=str_replace('ừ', 'u', $name);
		$name=str_replace('ự', 'u', $name);
		$name=str_replace('ử', 'u', $name);
		$name=str_replace('ữ', 'u', $name);
		$name=str_replace('ư', 'u', $name);
		
		$name=str_replace('ý', 'y', $name);
		$name=str_replace('ỳ', 'y', $name);
		$name=str_replace('ỷ', 'y', $name);
		$name=str_replace('ỹ', 'y', $name);
		$name=str_replace('ỵ', 'y', $name);
		
		$name=str_replace('*', '', $name);
		$name=str_replace('"', '', $name);
		$name=str_replace("'", '', $name);
		$name=str_replace('?', '', $name);
		
		$name=str_replace(' ', '-', $name);
		$name=str_replace('đ', 'd', $name);
		
		return $name;
	}
/* End bỏ dấu làm Alias */
}

/* End of Admin_controller.php */
/* Location: ./system/application/libraries/Admin_controller.php */