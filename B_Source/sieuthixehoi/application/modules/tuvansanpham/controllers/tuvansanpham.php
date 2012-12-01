<?php
class Tuvansanpham extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mtuvansanpham');
		$this->load->library('pagination');
		//$this->addVisiting();
	}
	
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['list']=$this->Mtuvansanpham->getListByColumn('tuvansanpham','parent_id',$index);
		
		$config['base_url']=base_url().'tuvansanpham/page/';
		$config['per_page']=8;
		$config['total_rows']=count($this->Mtuvansanpham->getListFull('tuvansanpham'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		
		//$data['counting']=$this->getCounting();
		
		$data['title']='sieuthioto | Tư vấn sản phẩm';
		$data['list_tuvansanpham']=$this->Mtuvansanpham->getListOffset('tuvansanpham',8,$index);
		$data['module']=$this->module;
		$data['page']='vtuvansanpham';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_tuvan']=$this->Mtuvansanpham->getListFull('tuvansanpham');
	//	$data['counting']=$this->getCounting();
		
		$data['title']='sieuthioto | Tư vấn sản phẩm';
		$data['detail']=$this->Mtuvansanpham->getRowByColumn('tuvansanpham','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
}