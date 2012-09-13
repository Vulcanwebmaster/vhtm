<?php
class Dathang extends NIW_controller {
	private $module;
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->model('Mdathang');
		$this->load->library('session');
		$this->setLang();
		
		if ($this->session->userdata('lang')=='vn')
		{
			$this->lang->load('mc','vietnamese');
		}
		else $this->lang->load('mc','english');
	}
	
	function index()
	{
		$data['module']=$this->module;
		$data['page']='vdathang';
		$this->load->module('front/container',$data);
	}
}
?>