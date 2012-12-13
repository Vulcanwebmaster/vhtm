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
		//$data['product']=$this->Mtintuc->getListOffset('ln_product',5,0);
		//$data['items']=$this->Mtintuc->getListByColumn('ta_news','news_category',1);
		//nho loi 
		$data['items'] = $this->Mtintuc->getListOffset('ta_news',4,$index);
		
		$data['title']='tienganh | Tin tức';
		$data['list_tintuc']=$this->Mtintuc->getListOffset('ta_news',3,$index);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	function mamnon($index=0)
	{
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh mầm non',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			$this->load->view('front/container',$data);	
	}
	
	function tieuhoc($index=0)
	{
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh tiểu học',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			$this->load->view('front/container',$data);	
	}

	function sinhvien($index=0)
	{
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh cho sinh viên',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			//$data['flagslide']='slide1';
			$this->load->view('front/container',$data);	
	}
	
	function dilam($index=0)
	{
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh cho người đi làm',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
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
			//$data['product']=$this->Mtintuc->getListOffset('ta_lecturers',5,0);
			//$config['list_giangvien']=$this->Mtintuc->getListFull('ta_lecturers');
			$data['list_chitiet']=$this->Mtintuc->getRowByColumn('ta_news','news_id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
	function listtintuc()
		{
			//echo "ddh";
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vtintuc-new';
			$this->load->view('front/container',$data);
		}
}