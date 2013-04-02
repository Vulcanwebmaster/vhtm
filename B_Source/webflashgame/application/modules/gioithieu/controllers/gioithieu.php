<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgioithieu');
			$this->load->library('session');
			$this->load->helper('text');
	}
	
	function index()
	{
			$this->page();
	}
	
	 
	function page($index=0)
	{
			$data['list_hotro'] = $this->Mgioithieu->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgioithieu->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgioithieu->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgioithieu->getListFull('fg_banner');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_gioithieu'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['link_fanpage'] = $this->Mgioithieu->getRowByColumn('fg_setting','id',1);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
	}
	
	function chuongtrinh($index=3)
	{
			$data['list_chitiet']  =  $this->Mgioithieu->getRowByColumn('fg_about_us','id',$index);
			$data['list_hotro'] = $this->Mgioithieu->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgioithieu->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgioithieu->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgioithieu->getListFull('fg_banner');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_gioithieu'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['link_fanpage'] = $this->Mgioithieu->getRowByColumn('fg_setting','id',1);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vchuongtrinh';
			$this->load->view('front/container',$data);
	}

	function dieukien($index=2)
	{
			$data['list_chitiet']  =  $this->Mgioithieu->getRowByColumn('fg_about_us','id',$index);
			$data['list_hotro'] = $this->Mgioithieu->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgioithieu->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgioithieu->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgioithieu->getListFull('fg_banner');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_gioithieu'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['link_fanpage'] = $this->Mgioithieu->getRowByColumn('fg_setting','id',1);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vdieukien';
			$this->load->view('front/container',$data);
	}

	function baomat($index=4)
	{
			$data['list_chitiet']  =  $this->Mgioithieu->getRowByColumn('fg_about_us','id',$index);
		//	var_dump($data['list_chitiet']); die();
			$data['list_hotro'] = $this->Mgioithieu->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgioithieu->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgioithieu->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgioithieu->getListFull('fg_banner');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_detail'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['link_fanpage'] = $this->Mgioithieu->getRowByColumn('fg_setting','id',1);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vbaomat';
			$this->load->view('front/container',$data);
	}
	
}