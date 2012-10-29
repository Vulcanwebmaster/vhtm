<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	public function index()
	{
		$data['title']='Tường Nhật | Home';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */