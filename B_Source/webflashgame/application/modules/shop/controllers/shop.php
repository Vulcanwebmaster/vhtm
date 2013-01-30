<?php
class Shop extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mshop');
			$this->load->library('session');
			$this->load->helper('text');
			$this->loadLang();
			$this->loadLogin();
	}

	function loadLogin()
	{
		//Kiem tra neu ton tai session trong dangky/checklogin thi...			
		if(isset($_SESSION['front_user_id'])){
			$id = $_SESSION['front_user_id'];
			return $id;
		}else{
			redirect(base_url().'dangky/dangnhap');
		}
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vshop';
			$this->load->view('front/container',$data);
	}
	
	function itemselection($index=0)
	{
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vitemselection';
			$this->load->view('front/container',$data);
	}
	
	function itemselection1($index=0)
	{
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vitemselection';
			$this->load->view('front/container',$data);
	}
	
}
	