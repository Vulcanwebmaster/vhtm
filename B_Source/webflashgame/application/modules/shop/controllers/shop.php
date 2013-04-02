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
			redirect(base_url().'login');
		}
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			$id = $_SESSION['front_user_id'];
			// Tính tỷ giá
			$listTest = $this->Mshop->getListByColumn('st_currencysetting', 'account_id', $id); 
			if (count($listTest) > 0)
			{
				$data['currency_setting'] = $this->Mshop->getRowByColumn('st_currencysetting','account_id',$id);
				$data['convert_money'] = $this->Mshop->getRowByColumn('st_convertcurrency','name',$data['currency_setting']->currency);
				$data['tygia'] = (float)$data['convert_money']->value_rate / (float)$data['convert_money']->euro_rate;
			}
			// End tính tỷ giá
			$data['list_tiente'] = $this->Mshop->getListFull('st_convertcurrency');
			$data['list_hotro'] = $this->Mshop->getListFull('fg_hotro');
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['list_money'] = $this->Mshop->getListFull('st_convertcurrencyofgame');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vshop';
			$this->load->view('front/container',$data);
	}
	// Shop 1
	function itemselection($index=0)
	{
		
		$luutygia = $this->input->post('tygia1');
		if(isset($luutygia) && $luutygia!=''){
			 $_SESSION['chuyentiennao'] = $luutygia;
			 $_SESSION['currencygame_123'] = $this->input->post('currencygame123');
		}
			$data['list_hotro'] = $this->Mshop->getListFull('fg_hotro');
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vitemselection';
			$this->load->view('front/container',$data);
	}
	// Shop 2
	function paymentmethod($index=0)
	{
			$data['list_hotro'] = $this->Mshop->getListFull('fg_hotro');		
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vpaymentmethod';
			$this->load->view('front/container',$data);
	}
	// Shop 3
	function pay($index=0)
	{
			$id = $_SESSION['front_user_id'];
			$listTest = $this->Mshop->getListByColumn('st_currencysetting', 'account_id', $id); 
			if (count($listTest) > 0)
			{
				$data['currency_setting'] = $this->Mshop->getRowByColumn('st_currencysetting','account_id',$id);
			}
			$data['list_hotro'] = $this->Mshop->getListFull('fg_hotro');		
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vpay';
			$this->load->view('front/container',$data);
	}
	// Shop 4
	function confirmation($index=0)
	{
			$data['list_hotro'] = $this->Mshop->getListFull('fg_hotro');		
			$data['items'] = $this->Mshop->getListOffset('fg_games',10,$index);
			$data['list_category'] = $this->Mshop->getListFull('fg_category');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vconfirmation';
			$this->load->view('front/container',$data);
	}
	
}
	