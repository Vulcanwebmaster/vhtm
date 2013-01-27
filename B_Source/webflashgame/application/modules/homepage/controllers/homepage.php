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
		$this->loadLang();
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$data['top1'] = $this->Mhomepage->getTopGame(1);
		$data['top_game'] = $this->Mhomepage->getTopGame(11);
		$data['list_category'] = $this->Mhomepage->getListFull('fg_category');
		$data['list_games'] = $this->Mhomepage->getListFull('fg_games');
		$data['list_game_cate']  =  $this->Mhomepage->getListFullCategory('fg_games');
		$data['title']='flash_game | Flash game';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */