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
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			
			$config['base_url'] = base_url().'games/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mgames->getListFull('fg_games'));
			$this->pagination->initialize($config);
			$data['items'] = $this->Mgames->getListOffset('fg_games',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgames';
			$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
		$count++;
		$this->Mapi->updateRowByColumn('fg_games','count',$count,array('count'=>$count));
			$data['list_game_cate'] = $this->Mgames->getListFull('fg_category');
			$data['category']  =  $this->Mgames->getListFullCategory('fg_games');
			$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			//$data['top_game'] =
			$data['items']  =  $this->Mgames->getListOffset('fg_games',10,$index);
			//var_dump($data['items']); die();
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			//var_dump($data['list_games']); die();
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
	}
	function category($id)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['list_games'] = $this->Mgames->getListFull('fg_games');
			$data['list_category'] = $this->Mgames->getListFull('fg_category');
			$data['list_game_cate']  =  $this->Mgames->getListCategory('fg_category');
			//var_dump($data['category']); die();
			$data['items']=$this->Mgames->getListByColumn('fg_games','category_id',$id);
			//var_dump($data['items']); die();
			$data['module']  =  $this->module;
			$data['page']  =  'vgames';
			$this->load->view('front/container',$data);
	}
}