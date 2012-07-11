<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NIW_Controller extends CI_Controller {
	
	private $_container;
	private $module;
	
	function __construct()
	{
		parent::__construct();

		// Load Base CodeIgniter files
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		
		//Load models
		$this->load->model('base_model');
		$this->load->model('preferences/preference_model','preference');
		// Load site wide modules
        $this->load->library('status/status');
		$this->load->library('site/bep_site');
		$this->load->library('site/bep_assets');
		$this->load->library('page/Page');
		
		$this->load->library('auth/userlib');

		
		// Load the SITE asset group
		$this->bep_assets->load_asset_group('SITE');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */