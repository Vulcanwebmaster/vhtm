<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mpolicy');
		$this->load->helper('ckeditor');
	}
	
	public function index($id)
	{	
		$data['policy']=$this->Mpolicy->getPolicy($id);
		$data['title']='Chính sách bảo mật';
		$data['module'] = $this->module;
		$data['page'] = 'vpolicy';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */