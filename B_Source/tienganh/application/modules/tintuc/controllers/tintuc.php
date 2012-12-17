<?php
class Tintuc extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
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
		$config['base_url'] = base_url().'tintuc/page';
		$config['per_page'] = 3;
		$config['total_rows'] = count($this->Mtintuc->getListFull('ta_news'));
		$this->pagination->initialize($config);
		//nho loi 
		$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
		$data['items'] = $this->Mtintuc->getListOffset('ta_news',4,$index);
		$data['title']='tienganh | Tin tức';
		$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
		$data['list_tintuc']=$this->Mtintuc->getListOffset('ta_news',3,$index);
		$data['module']=$this->module;
		$data['index'] = -1;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	
	function mamnon($index=0)
	{
			$config['base_url'] = base_url().'tintuc/mamnon';
			$config['per_page'] = 2;
			$config['total_rows']=count($this->Mtintuc->getListByColumn('ta_news','news_category','Tiếng Anh mầm non'));
			$this->pagination->initialize($config);
			$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh mầm non',$index,2);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			$data['index'] = 0;
			$this->load->view('front/container',$data);	
	}
	
	function tieuhoc($index=0)
	{
			$config['base_url'] = base_url().'tintuc/tieuhoc';
			$config['per_page'] = 2;
			$config['total_rows']=count($this->Mtintuc->getListByColumn('ta_news','news_category','Tiếng Anh tiểu học'));
			$this->pagination->initialize($config);
			$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh tiểu học',$index,2);
			$data['module']=$this->module;
			$data['index'] = 1;
			$data['page']='vtintuc';
			$this->load->view('front/container',$data);	
	}

	function sinhvien($index=0)
	{
			$config['base_url'] = base_url().'tintuc/sinhvien';
			$config['per_page'] = 2;
			$config['total_rows']=count($this->Mtintuc->getListByColumn('ta_news','news_category','Tiếng Anh cho sinh viên'));
			$this->pagination->initialize($config);
			$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh cho sinh viên',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			$data['index'] = 2;
			//$data['flagslide']='slide1';
			$this->load->view('front/container',$data);	
	}
	
	function dilam($index=0)
	{
			$config['base_url'] = base_url().'tintuc/dilam';
			$config['per_page'] = 2;
			$config['total_rows']=count($this->Mtintuc->getListByColumn('ta_news','news_category','Tiếng Anh cho người đi làm'));
			$this->pagination->initialize($config);
			$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
			$data['items']=$this->Mtintuc->getListByColumnOffsetsp('ta_news','news_category','Tiếng Anh cho người đi làm',$index,4);
			$data['module']=$this->module;
			$data['page']='vtintuc';
			$data['index'] = 3;
			$this->load->view('front/container',$data);	
	}
	
	function detail($id=0)
		{
			$data['categories']=$this->Mtintuc->getListByColumn('ta_category','parent_id','0');
			$data['list_doitac']=$this->Mtintuc->getListFull('doitac');
			$data['list_chitiet']=$this->Mtintuc->getRowByColumn('ta_news','news_id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['page']='vdetail';
			$data['index'] = -1;
			$this->load->view('front/container',$data);
		}
}