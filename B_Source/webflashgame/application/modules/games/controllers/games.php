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
			$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','game_id',$index);
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			$config['base_url'] = base_url().'games/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mgames->getListFull('fg_games'));
			$this->pagination->initialize($config);
			$data['items'] = $this->Mgames->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgames';
			$this->load->view('front/container',$data);
	}
	
	function api($index=0){
		
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
			$data['list_game_cate'] = $this->Mgames->getListFull('fg_category');
			$data['category']  =  $this->Mgames->getListFullCategory('fg_games');
			$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','game_id',$index);
			$count=$data['list_chitiet'];
			$luotchoi=$count->count_dem +1; 
			$this->Mgames->updateRowByColumn('fg_games','game_id',$index,array('count_dem'=>$luotchoi));
			$data['topgame']  =  $this->Mgames->topGame(1);
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
	
	function gioithieu($index=0){
		
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
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['items']=$this->Mgames->getListByColumn('fg_games','category_id',$id);
			$data['module']  =  $this->module;
			$data['page']  =  'vgames';
			$this->load->view('front/container',$data);
	}
	
	function rules($index=0){
			$data['list_chitiet'] = $this->Mgames->getListFull('fg_games');
			$data['module']  =  $this->module;
			$data['page']  =  'vdetaillogin';
			$this->load->view('front/container',$data);
	}
}