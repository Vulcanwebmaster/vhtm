<?php
class Giaidau extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgiaidau');
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
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			//var_dump($data['list_chitiet']); die();
			$data['past'] = $this->Mgiaidau->gamePast();
			$data['nextweek'] = $this->Mgiaidau->gameNextWeek();
			$data['week'] = $this->Mgiaidau->gameWeek($index);
			$data['today'] = $this->Mgiaidau->gameToday();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgiaidau';
			$this->load->view('front/container',$data);
	}
	
	function jackpost($index=0)
	{
			
	}
	function past($index=0)
	{
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['past'] = $this->Mgiaidau->gamePast();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vpast';
			$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
			 $data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			 $data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			 $data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			 $data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			 $data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			 $data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			 $data['items']  =  $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			 $data['list_tour'] = $this->Mgiaidau->getListFull('fg_tournaments');
			 $model=new CI_Model();
			 $data['module']  =  $this->module;
			 $data['page']  =  'vdetail';
			 $data['index']  =  -1;
			 $this->load->view('front/container',$data);
	}
	
}