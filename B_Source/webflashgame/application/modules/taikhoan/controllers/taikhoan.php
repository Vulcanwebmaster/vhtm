<?php
class Taikhoan extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mtaikhoan');
			$this->load->library('session');
			$this->load->helper('text');
	}
	
	function index()
	{
			$this->page();
	}
	
	
	function page($index=0)
	{
			
			$config['base_url'] = base_url().'taikhoan/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mtaikhoan->getListFull('fg_account'));
			$this->pagination->initialize($config);
			$data['items'] = $this->Mtaikhoan->getListOffset('fg_account',10,$index);
			$data['title']='flashgame | Flash games';
			$data['hotro_online']=$this->Mtaikhoan->getListFull('hotroonline');
			$data['category']  =  $this->Mtaikhoan->getListFullCategory('ta_courses');
			$data['list_doitac']=$this->Mtaikhoan->getListFull('doitac');
			$data['hotro_online']=$this->Mtaikhoan->getListFull('hotroonline');
			$data['list_slide']=$this->Mtaikhoan->getListFull('slide');
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='personal_data';
			$this->load->view('front/container',$data);
	}
	
	
}