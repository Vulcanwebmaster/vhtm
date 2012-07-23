<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		check('Control Panel');
		
		// Load the ADMIN asset group
		$this->bep_assets->load_asset_group('ADMIN');
		$this->load->library('form_validation');
		$this->load->helper('language');
	}
}

/* End of Admin_controller.php */
/* Location: ./system/application/libraries/Admin_controller.php */