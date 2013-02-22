<?php
class Games extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgames');
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
			$data['list_games'] = $this->Mgames->getListOffset('fg_games',8,0);
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','game_id',$index);
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			$config['base_url'] = base_url().'games/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mgames->getListFull('fg_games'));
			$this->pagination->initialize($config);
			$data['items'] = $this->Mgames->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mgames->getListFull('fg_category','game_id',$index);
			//var_dump($data['list_category']); die();
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgames';
			$this->load->view('front/container',$data);
	}
	
	function api($index=0)
	{
			$data['step']  =  $this->Mgames->getListFull('fg_step');
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['items'] = $this->Mgames->getListOffset('fg_games',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vplay';
			$this->load->view('front/container',$data);
	}
	function detail($index=0)
	{
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_game_cate'] = $this->Mgames->getListFull('fg_category');
			$data['category']  =  $this->Mgames->getListFullCategory('fg_games');
			$data['ds_danhmuc']=$this->Mgames->getListCategory('fg_games','game_id',$index);
			//var_dump($data['ds_danhmuc']); die();
			$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','game_id',$index);
			$data['list_chitiet_category']  =  $this->Mgames->getListCategory('fg_category');
			$count=$data['list_chitiet'];
			$luotchoi=$count->count_dem +1; 
			$this->Mgames->updateRowByColumn('fg_games','game_id',$index,array('count_dem'=>$luotchoi));
			$data['topgame']  =  $this->Mgames->topGame(3);
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			
			$data['items']  =  $this->Mgames->getListOffset('fg_games',10,$index);
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
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
	
	function gioithieu($index=0)
	{
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['items'] = $this->Mgames->getListOffset('fg_games',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
	}
	function category($id)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['breadcrum1']  =  $this->Mgames->getRowByColumn('fg_category','id',$id);
			//var_dump($data['breadcrum1']); die();
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['items']=$this->Mgames->getListByColumn('fg_games','category_id',$id);
			$data['module']  =  $this->module;
			$data['page']  =  'vgames';
			$this->load->view('front/container',$data);
	}
	
	function rules($index=0)
	{
			$data['list_hotro'] = $this->Mgames->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgames->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgames->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgames->getListFull('fg_banner');
			$data['list_chitiet'] = $this->Mgames->getListFull('fg_games');
			$data['module']  =  $this->module;
			$data['page']  =  'vdetaillogin';
			$this->load->view('front/container',$data);
	}
}