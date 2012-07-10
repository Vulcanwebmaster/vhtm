<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends NIW_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Dash Broad";
		$this->load->view("admin/container",$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */