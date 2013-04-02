<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		redirect(base_url().'assets/js/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php');
	}
}