<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thutucnhaphoc extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mthutucnhaphoc');
	}
	
	function index()
	{
		$this->view(1);
	}
	
	function view($id)
	{
		$data['query']=$this->Mthutucnhaphoc->getThuTuc($id);
		$data['title']='Thủ tục nhập học';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vthutucnhaphoc.php';
		$this->load->view('front/container',$data);
	}
}
?>
	