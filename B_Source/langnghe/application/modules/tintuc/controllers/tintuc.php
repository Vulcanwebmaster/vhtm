<?php
class Tintuc extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mtintuc');
		$this->load->library('session');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['product']=$this->Mtintuc->getListOffset('ln_product',5,0);
		$data['items']=$this->Mtintuc->getListByColumn('ln_news','news_title',1);
		$data['title']='langnghe | Tin tức';
		$data['list_tintuc']=$this->Mtintuc->getListOffset('ln_news',8,$index);
		$data['module']=$this->module;
		$data['page']='vtintuc';
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
			$data['product']=$this->Mtintuc->getListOffset('ln_product',5,0);
			$data['news']=$this->Mtintuc->getRowByColumn('ln_news','news_id',$news_id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	
}