<?php
class Dulich extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mdulich');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['product']=$this->Mdulich->getListOffset('ln_product',5,0);
		$data['items']=$this->Mdulich->getListByColumn('ln_dulich','tieude',1);
		$data['title']='langnghe | Du lịch';
		$data['list_dulich']=$this->Mdulich->getListOffset('ln_dulich',8,$index);
		$data['module']=$this->module;
		$data['page']='vdulich';
		$this->load->view('front/container',$data);
	}
	
		
	function detail($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$tourism_id = $temp[0];
			}
			$data['product']=$this->Mdulich->getListOffset('ln_product',5,0);
			$data['tourism']=$this->Mdulich->getRowByColumn('ln_dulich','id',$tourism_id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
}