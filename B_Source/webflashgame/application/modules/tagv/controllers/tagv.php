<?php
class Tagv extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mtagv');
			$this->load->library('session');
			$this->load->helper('text');
			$this->loadLang();
	}
	
	function index()
	{
			$this->page();
	}
	
	 
	function page($index=0)
	{
		$news = $this->Mtagv->getRowByColumn('st_metatag','id',1);
		$data['meta_tag'] = $news->meta_news;
		$data['step']  =  $this->Mtagv->getListFull('fg_step');
		$data['photo'] = $this->Mtagv->getListFull('fg_banner');
		$data['link_fanpage'] = $this->Mtagv->getRowByColumn('fg_setting','id',1);
		$data['list_belote'] = $this->Mtagv->getListFull('fg_belote');
		//$data['list_tagnews'] = $this->Mtagv->getListTagvNews('fg_belote','id',$index);
		$data['topwin']  =  $this->Mtagv->Topwin(4);
		$data['topgiaidau']  =  $this->Mtagv->Topgiaidau(4);
		$config['base_url']=base_url().'news/page/';
		$config['per_page']=8;
		$config['total_rows']=count($this->Mtagv->getListFull('fg_news'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$data['list_news']=$this->Mtagv->getListOffset('fg_news',8,$index);
		$data['module']=$this->module;
		$data['page']='vtagv';
		$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
			$data['list_tagnews'] = $this->Mtagv->getListTagvNews('fg_news_tag','id',$index);
			//var_dump($data['list_tagnews']); die();
			$giaidau = $this->Mtagv->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $giaidau->meta_tourmanents;
			// $data['avarta'] = $this->Mtagv->getListCategory('fg_tournaments','tour_id',$index);
			$data['step']  =  $this->Mtagv->getListFull('fg_step');
			 $data['available'] = $this->Mtagv->getRowByColumn('fg_tournaments','tour_id',$index);
			 $available=$data['available']->players;
			 $data['player'] = $this->Mtagv->CountPlayer('fg_list_player','tour_id',$index);
			 $data['list_giaidau'] = $this->Mtagv->getListFull('fg_tournaments');
			 $data['list_hotro'] = $this->Mtagv->getListFull('fg_hotro');
			 $data['list_bannerheader'] = $this->Mtagv->getListFull('fg_bannerheader');
			 $data['list_slide'] = $this->Mtagv->getListFull('fg_slide');
			 
			 $data['setting_detail'] = $this->Mtagv->getRowByColumn('fg_tournaments','tour_id',$index);
			 $data['list_category'] = $this->Mtagv->getListFull('fg_category');
			 $data['list_chitiet']  =  $this->Mtagv->getRowByColumn('fg_tournaments','tour_id',$index);
			 $data['setting_chitiet']  =  $this->Mtagv->getRowByColumn('fg_setting','id',1);
			 $data['checkStatus']  =  $this->Mtagv->check('id',$index);
			 $data['listPlayer'] = $this->Mtagv->CountPlayer('fg_list_player','id',$index);
			 $data['list_player'] = $this->Mtagv->getListUsername('fg_list_player','id',$index);
			 
			 
			 $data['index']  =  -1;
			 $this->load->view('front/container',$data);
	}
}