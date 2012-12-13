<?php
class Giangvien extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mgiangvien');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		//$data['product']=$this->Mgiangvien->getListOffset('ln_product',5,0);
		$data['items']=$this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category',1);
		$data['title']='tienganh | Giảng viên';
		$data['list_giangvien']=$this->Mgiangvien->getListOffset('ta_lecturers',3,$index);
		$data['module']=$this->module;
		$data['page']='vgiangvien';
		$this->load->view('front/container',$data);
	}
	
		function trogiang($index=0)
		{
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Trợ giảng',$index,4);
				$data['module']=$this->module;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
		
		function thaygiao($index=0)
		{
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Thầy giáo',$index,4);
				$data['module']=$this->module;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
	
		function cogiao($index=0)
		{
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Cô giáo',$index,4);
				$data['module']=$this->module;
				$data['page']='vgiangvien';
				//$data['flagslide']='slide1';
				$this->load->view('front/container',$data);	
		}
	
	function detail($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$id = $temp[0];
			}
			//$data['product']=$this->Mgiangvien->getListOffset('ta_lecturers',5,0);
			//$config['list_giangvien']=$this->Mgiangvien->getListFull('ta_lecturers');
			$data['list_chitiet']=$this->Mgiangvien->getRowByColumn('ta_lecturers','lecturers_id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
}