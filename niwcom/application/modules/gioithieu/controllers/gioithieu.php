<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mgioithieu');
		$this->load->helper('text'); //cop vao controller
		$this->setLang();
		$this->loadLang();
	}
	
	function index()
	{
		$data['lang']=$this->session->userdata("lang");
		$data['title']='Niw - Giới thiệu';
		$data['list_gioithieu']=$this->Mgioithieu->getRowByColumn('gioithieu','id',1);
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mgioithieu->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mgioithieu->getListFullODB('sanpham',6,'id','DESC');
		// Meta tags
		$gioithieu = $this->Mgioithieu->getRowByColumn('metatag','id',1);
		$data['list_slide']=$this->Mgioithieu->getRowByColumn('slide','id','1');
		$data['list_tagscloud']=$this->Mgioithieu->getListFull('tagcloud');
		$data['meta_tag'] = $gioithieu->meta_gioithieu;
		
		$data['index']= 2 ;
		$data['module']=$this->module;
		$data['page']='vgioithieu';
		$this->load->view('front/container',$data);
	}
}