<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
	}
	
	public function index()
	{
		$this->data['title']='Tường Nhật | Home';
		$this->data['module'] = $this->module;
		$this->data['page'] = 'frontpage';
		$this->load->view('front/container',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */