<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$this->load->view('example');
	}
}

/* End of file example */
/* Location: ./application/modules/example/example.php */