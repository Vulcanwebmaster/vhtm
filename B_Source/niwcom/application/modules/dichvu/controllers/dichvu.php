<?php
class dichvu extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mdichvu');
		$this->load->helper('text'); //cop vao controller
		$this->setLang();
		$this->loadLang();
		$this->load->helper('text'); 
	}
	
	function index()
	{
		$data['list_tagscloud']=$this->Mdichvu->getListFull('tagcloud');
		$data['lang']=$this->session->userdata("lang");
		$data['title']='Niw - Dịch vụ';
		$data['list_dichvu']=$this->Mdichvu->getListFull('dichvu');
		$data['list_slide']=$this->Mdichvu->getRowByColumn('slide','id','1');
		$data['list_tagv'] = $this->Mdichvu->getListFull('tagcloud');
		// Meta tags
		$dichvu = $this->Mdichvu->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $dichvu->meta_dichvu;
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mdichvu->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mdichvu->getListFullODB('sanpham',6,'id','DESC');
		$data['module']=$this->module;
		$data['page']='vdichvu';
		$data['index']= 3 ;
		$this->load->view('front/container',$data);
	}
	function detail($id=0)
	{
		$data['list_dichvu']=$this->Mdichvu->getListFull('dichvu');
		$data['list_tagscloud']=$this->Mdichvu->getListFull('tagcloud');
		$data['dichvu']=$this->Mdichvu->getRowByColumn('dichvu','id',$id);
		$data['list_tagv'] = $this->Mdichvu->getListFull('tagcloud');
		// Meta tags
		$dichvu = $this->Mdichvu->getRowByColumn('metatag','id',1);
		$data['list_slide']=$this->Mdichvu->getRowByColumn('slide','id','1');
		$data['meta_tag'] = $dichvu->meta_dichvu;
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mdichvu->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mdichvu->getListFullODB('sanpham',6,'id','DESC');
		$model=new CI_Model();
		$data['module']=$this->module;
		$data['lang']=$this->session->userdata("lang");
		$data['index']= 3 ;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}
}