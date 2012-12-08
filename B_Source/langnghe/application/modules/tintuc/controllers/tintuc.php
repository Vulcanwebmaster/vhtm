<?php
class Tintuc extends NIW_Controller
{
	function __construct()
	{
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
		$data['items']=$this->Mtintuc->getListByColumn('ln_news','news_title',1);
		$data['title']='langnghe | Tin tức';
		$data['list_tintuc']=$this->Mtintuc->getListOffset('ln_news',8,$index);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	
	function chitiet($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$category_id = $temp[0];
				$product_id = $temp[1];
			}

			$data['category']=$this->Msanpham->getRowByColumn('mc_category','id',$category_id);
			$data['product']=$this->Msanpham->getRowByColumn('mc_product','id',$product_id);
			$data['parents']=$this->Msanpham->getListByColumn('mc_category','parent_id',0);
			$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			$data['list_doitac']=$this->Msanpham->getListFull('doitac');	
			$data['detail']=$this->Msanpham->getRowByColumn('mc_product','id',$product_id);
			
			$model=new CI_Model();
			
			$data['module']=$this->module;
			// Lấy dl từ $data['detail'] (dòng trên)
			$category_id1=$data['detail']->category_id;
			//var_dump($data['detail']->category_id);die();
			$data['relates']=$this->Msanpham->getListByColumnOffset('mc_product','category_id',$category_id1,0,6);
			
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
	function detail()
		{
		$data['items']=$this->Mtintuc->getListByColumn('ln_news','news_title',1);
		$data['title']='langnghe | Tin tức';
		$data['list_tintuc']=$this->Mtintuc->getListOffset('ln_news',2,2);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
		}
	
}