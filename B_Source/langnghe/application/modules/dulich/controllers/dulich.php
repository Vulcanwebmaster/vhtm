<?php
class Dulich extends NIW_Controller
{
	function __construct()
	{
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
		$data['items']=$this->Mdulich->getListByColumn('dulich','tieude',1);
		$data['title']='langnghe | Tin tức';
		$data['list_dulich']=$this->Mdulich->getListOffset('dulich',8,$index);
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
				$news_id = $temp[0];
			}
			$data['dulich']=$this->Mdulich->getRowByColumn('dulich','id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
}