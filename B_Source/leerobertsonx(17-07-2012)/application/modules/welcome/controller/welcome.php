<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$this->load->view($this->_container);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */