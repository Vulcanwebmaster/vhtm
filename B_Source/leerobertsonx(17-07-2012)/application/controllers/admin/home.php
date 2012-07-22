<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('editor_library');
	}
	
	public function index()
	{
		$data["title"] = "Dash Broad";
		$data['page'] = "admin/home";
		//Breadcrumb data
		$data['bcCurrent'] = "Dash Broad";
		
		$this->load->view("admin/container",$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */