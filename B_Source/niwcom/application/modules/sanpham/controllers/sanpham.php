<?php
class sanpham extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Msanpham');
		$this->load->helper('text'); //cop vao controller
		$this->load->library('pagination');
		$this->setLang();
		$this->loadLang();
	}
	
	function index($index=0)
	{//Phân trang thành công
				$config['base_url'] = base_url().'sanpham/index';
				$config['per_page'] = 3;
				$config['total_rows'] = count($this->Msanpham->getListFull('sanpham'));
				$config['uri_segment'] = 3;
				$this->pagination->initialize($config);
				
				//phai limit de lay so trang can phan
				$data['items'] = $this->Msanpham->getListOffset('sanpham',4,$index);
		
		$data['lang']=$this->session->userdata("lang");
		$data['title']='Niw - Sản phẩm';
		$data['index']= 4 ;
		$data['list_sanpham']=$this->Msanpham->getListFull('sanpham');
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Msanpham->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Msanpham->getListFullODB('sanpham',6,'id','DESC');
		// Meta tags
		$sanpham = $this->Msanpham->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $sanpham->meta_sanpham;
		$data['list_slide']=$this->Msanpham->getRowByColumn('slide','id','1');
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
}