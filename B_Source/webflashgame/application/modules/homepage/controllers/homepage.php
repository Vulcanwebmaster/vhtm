<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$data['list_category'] = $this->Mhomepage->getListFull('fg_category');
		//$data['top_game'] = $this->Mhomepage->getTopGame('fg_games');
		$data['list_games'] = $this->Mhomepage->getListFull('fg_games');
		//var_dump($data['list_games']); die();
		$data['list_game_cate']  =  $this->Mhomepage->getListFullCategory('fg_games');
		//var_dump($data['list_game_cate']); die();
		$data['title']='flash_game | Flash game';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */