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
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			$data['past'] = $this->Mgiaidau->gamePast();
			//var_dump($data['past']); die();
			$data['nextweek'] = $this->Mgiaidau->gameNextWeek();
			//var_dump($data['nextweek']); die();
			$data['week'] = $this->Mgiaidau->gameWeek();
			//var_dump($data['week']); die();
			$data['today'] = $this->Mgiaidau->gameToday();
			//var_dump($data['today']); die();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgiaidau';
			$this->load->view('front/container',$data);
	}
	
	function past($index=0)
	{
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
			
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			
			$data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			var_dump($data['list_chitiet']); die();
			$data['items']  =  $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['list_tour'] = $this->Mgiaidau->getListFull('fg_tournaments');
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
	}
	
}