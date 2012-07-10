<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = "example";
	}
	
	public function index()
	{
		$this->load->view('example');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */