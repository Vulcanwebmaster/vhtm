<?php
class Gioithieu extends NIW_Controller
{
	
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mthuvien');
		$this->load->library('session');
		$this->load->helper('text');
		}
		function index()
		{
		$this->page();
		}
	
		function page($index=0)
		{
		$data['items']=$this->Mthuvien->getListByColumn('ta_image','about_category',1);
		$data['title']='tienganh | Thư viện';
		$data['list_doitac']=$this->Mthuvien->getListFull('doitac');
		$data['list_thuvien']=$this->Mthuvien->getListOffset('ta_library',3,$index);
		$data['module']=$this->module;
		$data['page']='vthuvien';
		$this->load->view('front/container',$data);
		}
	
	function trungtam($index=0)
		{
				$data['list_doitac']=$this->Mthuvien->getListFull('doitac');
				$data['items']=$this->Mthuvien->getListByColumnOffsetsp('ta_library','library_category','Hình ảnh trung tâm',$index,4);
				$data['module']=$this->module;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
		
	function khoahoc($index=0)
		{
				$data['list_doitac']=$this->Mthuvien->getListFull('doitac');
				$data['items']=$this->Mthuvien->getListByColumnOffsetsp('ta_library','library_category','Hình ảnh khóa học',$index,4);
				$data['module']=$this->module;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
		
	function sukien($index=0)
		{
				$data['list_doitac']=$this->Mthuvien->getListFull('doitac');
				$data['items']=$this->Mthuvien->getListByColumnOffsetsp('ta_library','library_category','Hình ảnh sự kiện',$index,4);
				$data['module']=$this->module;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
		
	function vedio($index=0)
		{
				$data['list_doitac']=$this->Mthuvien->getListFull('doitac');
				$data['items']=$this->Mthuvien->getListByColumnOffsetsp('ta_library','library_category','Video khóa học',$index,4);
				$data['module']=$this->module;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
}