<?php
class Sanpham extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->library('pagination');
		
		$this->load->model('Msanpham');
		$this->setLang();
		$this->loadLang();
	}
	
	function loadLang()
	{
		$lang=$this->session->userdata('lang');
		if ($lang=='vn')
		{
			$this->lang->load('5sao','vietnamese');
		}
		else $this->lang->load('5sao','english');
	}
	
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$config['base_url']=base_url().'sanpham/page/'.$index;
		$config['per_page']=12;
		$config['total_rows']=count($this->Msanpham->getListFull('sanpham'));
		$this->pagination->initialize($config);
		
		$data['list']=$this->Msanpham->getListOffset('sanpham',12,$index);
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['detail']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
		$data['module']=$this->module;
		
		$category_id=$data['detail']->danhmuc_id;
		$data['relates']=$this->Msanpham->getListByColumn('sanpham','danhmuc_id',$category_id);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}
}