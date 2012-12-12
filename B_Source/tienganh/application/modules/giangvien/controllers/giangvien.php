<?php
class Giangvien extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mgiangvien');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		//$data['product']=$this->Mgiangvien->getListOffset('ln_product',5,0);
		$data['items']=$this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category',1);
		$data['title']='tienganh | Giảng viên';
		$data['list_giangvien']=$this->Mgiangvien->getListOffset('ta_lecturers',8,$index);
		$data['module']=$this->module;
		$data['page']='vgiangvien';
		$this->load->view('front/container',$data);
	}
	
}