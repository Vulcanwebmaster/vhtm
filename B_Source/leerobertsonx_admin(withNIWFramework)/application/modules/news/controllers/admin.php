<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_news_create";
		$data['title'] = "Add New Article";
		$this->load->view('admin/container',$data);
	}
}

/* End of file admin.php */
/* Location: ./application/modules/news/controllers/admin.php */