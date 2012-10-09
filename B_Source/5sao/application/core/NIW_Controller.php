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
	
	function set_default_value($data=NULL, $value=NULL)
	{
		if (is_array($data))
		{
			foreach($data as $field => $value)
			{
				$this->set_default_value($field,$value);
			}
			return;
		}

		$this->$data    = $value;
		$_POST[$data]   = $value;
	}
    function set_fields($data = '', $field = '')
	{
		if ($data == '')
		{
			if (count($this->_fields) == 0)
			{
				return FALSE;
			}
		}
		else
		{
			if ( ! is_array($data))
			{
				$data = array($data => $field);
			}

			if (count($data) > 0)
			{
				$this->_fields = $data;
			}
		}

		foreach($this->_fields as $key => $val)
		{
			$this->$key = ( ! isset($_POST[$key])) ? '' : $this->prep_for_form($_POST[$key]);

			$error = $key.'_error';
			if ( ! isset($this->$error))
			{
				$this->$error = '';
			}
		}
	}
	
	function setLang()
	{
		if (!$this->session->userdata('lang'))
		{
			$this->session->set_userdata('lang','vn');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */