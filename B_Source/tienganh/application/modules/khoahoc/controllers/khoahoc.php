<?php
	class Khoahoc extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->model('Mkhoahoc');
			$this->load->library('session');
		}

		function index()
		{
			$data['parents']=$this->Mkhoahoc->getListByColumn('ta_category','parent_id',0);
			$data['items']=$this->Mkhoahoc->getListFull('ta_courses');
			$data['module']=$this->module;
			$data['page']='vkhoahoc';
			$this->load->view('front/container',$data);			
		}
		
		function view($category_id)
		{
			$data['query']=$this->Mkhoahoc->getRowByColumn('ta_category','id',$category_id);
			$data['parents']=$this->Mkhoahoc->getListByColumn('ta_category','parent_id',0);
			$data['items']=$this->Mkhoahoc->getListByColumn('ta_courses','category_id',$category_id);
			$data['module']=$this->module;
			$data['page']='vkhoahoc';
			$this->load->view('front/container',$data);
		}
		
		function chitiet($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$category_id = $temp[0];
				$courses_id = $temp[1];
			}

			$data['category']=$this->Mkhoahoc->getRowByColumn('ta_category','id',$category_id);
			$data['courses']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$courses_id);
			$data['parents']=$this->Mkhoahoc->getListByColumn('ta_category','parent_id',0);
			$data['detail']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$courses_id);
			
			$model=new CI_Model();
			
			$data['module']=$this->module;
			// Lấy dl từ $data['detail'] (dòng trên)
			$category_id1=$data['detail']->category_id;
			//var_dump($data['detail']->category_id);die();
			$data['relates']=$this->Mkhoahoc->getListByColumnOffset('ta_courses','category_id',$category_id1,0,6);
			
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
		function danhMuc($id_danhmuc=0)
		{
			$data['listcate']=$this->Mkhoahoc->getListByColumn('ta_category','parent_id',0);
			$data['list']=$this->Mkhoahoc->getListByColumn('ta_courses','category_id',$id_danhmuc);
			$data['category']=$this->Mkhoahoc->getRowByColumn('ta_category','id',$id_danhmuc);
			$data['module']=$this->module;
			$data['page']='vkhoahoc';
			$this->load->view('front/container',$data);
		}
	}
?>