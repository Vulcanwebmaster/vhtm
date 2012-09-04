<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hinhanh extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhinhanh');
	}
	
	function index()
	{
		$this->view(1);
	}
	
	function view($id)
	{
		$data['hinhanh']=$this->Mhinhanh->getListHinhAnh();
		$data['query']=$this->Mhinhanh->getHinhAnhID($id);
		$data['title']='Hình ảnh';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vhinhanh.php';
		$this->load->view('front/container',$data);
	}
}
?>
	