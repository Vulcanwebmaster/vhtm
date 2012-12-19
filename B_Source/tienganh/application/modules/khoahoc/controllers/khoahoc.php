<?php
class Khoahoc extends NIW_Controller
{
	private $data = array();
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->library('pagination');
		
		$this->load->model('Mkhoahoc');
		$this->module	=	strtolower(get_class());
		$this->data['list_doitac']=$this->Mkhoahoc->getListFull('doitac');
	}
	
	function index()
	{
		$this->data['page']	=	'vkhoahoc';
		$this->data['module']	=	$this->module;
		$this->load->view('front/container', $this->data);
	}
	
	function chitiet()
	{
		$this->data['page']	=	'vchitiet';
		$this->data['module']	=	$this->module;
		$this->load->view('front/container', $this->data);
	}
	
	function listCourses()
	{
		$data['list_cate']=$this->Mkhoahoc->getListByColumn('ta_courses','category_id','1');
		$data['title']='tienganh | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'vkhoahoc';
		$this->load->view('front/container',$data);
	}
	
	function detail($alias)
	{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$category_id = $temp[0];
				$id = $temp[1];
			}		
		$data['list_hotro']=$this->Mkhoahoc->getListFull('hotro');
		$data['list_doitac']=$this->Mkhoahoc->getListFull('doitac');
		$data['categories']=$this->Mkhoahoc->getListByColumn('ta_category','parent_id','0');
		$data['detail']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$id);
		$data['title']='tienganh | Tiếng anh';		
		$data['module']=$this->module;
		$data['current_breadcrum']=$data['detail']->courses_name;
		$category_id=$data['detail']->category_id;
		$data['relates']=$this->Mkhoahoc->getListByColumnOffset('ta_courses','danhmuc_id',$category_id,0,6);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}

	function category($id=0, $index=0)
	{
		$data['list_hotro']=$this->Mkhoahoc->getListFull('hotro');
		$data['list_doitac']=$this->Mkhoahoc->getListFull('doitac');
		$data['current_category']= $this->Mkhoahoc->getRowByColumn('danhmuc','id',$id);
			$data['current_breadcrum']=$data['current_category']->ten_v;
		$data['categories']=$this->Mkhoahoc->getListByColumn('danhmuc','parent_id','0');
		$data['title']='thaiduong | Sản phẩm';		
		
		if (!$this->Mkhoahoc->isParent($id)){
			$data['list']=$this->Mkhoahoc->getListByColumnOffset('ta_courses','danhmuc_id',$id,$index,9);	
		}
		else{
			$data['list']=$this->Mkhoahoc->getSpByParentID($id);
		}
		
		$data['module']=$this->module;
		$data['page']='vkhoahoc';
		$this->load->view('front/container',$data);
	}
}