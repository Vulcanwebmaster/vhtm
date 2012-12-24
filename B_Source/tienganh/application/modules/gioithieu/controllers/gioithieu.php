<?php
class Gioithieu extends NIW_Controller
{
	
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->model('Mgioithieu');
			$this->load->library('session');
			$this->load->helper('text');
		}
		function index()
		{
			$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
			$data['list_courses'] = $this->Mgioithieu->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mgioithieu->getListFull('ta_courses_cate');
			$this->sumenh();
		}
	
		function page($index=0)
		{
			$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
			$data['items']=$this->Mgioithieu->getListByColumn('ta_about_us','about_category',1);
			$data['title']='tienganh | Giới thiệu';
			$data['list_slide']=$this->Mgioithieu->getListFull('slide');
			$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
			$data['list_courses'] = $this->Mgioithieu->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mgioithieu->getListFull('ta_courses_cate');
			$data['category']  =  $this->Mgioithieu->getListFullCategory('ta_courses');
			$data['list_gioithieu']=$this->Mgioithieu->getListOffset('ta_about_us',3,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
		}
	
	function sumenh($index=0)
		{
				$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
				$data['list_slide']=$this->Mgioithieu->getListFull('slide');
				$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
				$data['category']  =  $this->Mgioithieu->getListFullCategory('ta_courses');
				$data['items']=$this->Mgioithieu->getListByColumnOffsetsp('ta_about_us','about_category','Sứ mệnh',$index,4);
				$data['module']=$this->module;
				$data['index'] = 5;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
		
	function tamnhin($index=0)
		{
				$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
				$data['list_slide']=$this->Mgioithieu->getListFull('slide');
				$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
				$data['category']  =  $this->Mgioithieu->getListFullCategory('ta_courses');
				$data['items']=$this->Mgioithieu->getListByColumnOffsetsp('ta_about_us','about_category','Tầm nhìn',$index,4);
				$data['module']=$this->module;
				$data['page']='vgioithieu';
				$data['index'] = 1;
				$this->load->view('front/container',$data);	
		}
		
	function giatri($index=0)
		{
				$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
				$data['list_slide']=$this->Mgioithieu->getListFull('slide');
				$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
				$data['category']  =  $this->Mgioithieu->getListFullCategory('ta_courses');
				$data['items']=$this->Mgioithieu->getListByColumnOffsetsp('ta_about_us','about_category','Giá trị cốt lõi',$index,4);
				$data['module']=$this->module;
				$data['index'] = 2;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
		
	function vanhoa($index=0)
		{
				$data['hotro_online']=$this->Mgioithieu->getListFull('hotroonline');
				$data['list_slide']=$this->Mgioithieu->getListFull('slide');
				$data['list_doitac']=$this->Mgioithieu->getListFull('doitac');
				$data['category']  =  $this->Mgioithieu->getListFullCategory('ta_courses');
				$data['items']=$this->Mgioithieu->getListByColumnOffsetsp('ta_about_us','about_category','Văn hóa công ty',$index,4);
				$data['module']=$this->module;
				$data['index'] = 3;
				$data['page']='vgioithieu';
				$this->load->view('front/container',$data);	
		}
}