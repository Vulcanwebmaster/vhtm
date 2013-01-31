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
			
			$config['base_url']=base_url().'homepage/page/';
			$config['per_page']= 9;
			$config['total_rows']=count($this->Mgiaidau->getListByColumn('fg_tournaments','tour_id','1'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
		//$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
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
			 $data['list_giaidau'] = $this->Mgiaidau->getListFull('fg_tournaments');
			 $data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			 $data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			 $data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			 $data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			 $data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			 $data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $id_giaidau=$data['list_chitiet']->tour_id;//lay duoc id cua giai dau
			  //var_dump($id_giaidau); die();
			 $data['player_list']  =  $this->Mgiaidau->getListUsername('fg_list_player');	
			 $data['items']  =  $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			 $data['list_tour'] = $this->Mgiaidau->getListFull('fg_tournaments');
			 $model=new CI_Model();
			 $data['module']  =  $this->module;
			if(isset($_SESSION['front_user_fullname'])){
				$data['page']  =  'vdetail';
			}else{
				$data['page']  =  'vdetaillogin';
			}
			 
			 $data['index']  =  -1;
			 $this->load->view('front/container',$data);
	}
	
}