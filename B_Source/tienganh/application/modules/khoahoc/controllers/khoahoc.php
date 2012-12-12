<?php
class Tintuc extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mkhoahoc');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		//$data['product']=$this->Mtintuc->getListOffset('ln_product',5,0);
		$data['items']=$this->Mkhoahoc->getListByColumn('ta_courses','courses_name',1);
		$data['title']='tienganh | Khóa học';
		$data['list_khoahoc']=$this->Mkhoahoc->getListOffset('ta_courses',8,$index);
		$data['module']=$this->module;
		$data['page']='vkhoahoc';
		$this->load->view('front/container',$data);
	}
	
		
	function detail($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$news_id = $temp[0];
			}
			//$data['product']=$this->Mtintuc->getListOffset('ln_product',5,0);
			$data['khoahoc']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$news_id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
}