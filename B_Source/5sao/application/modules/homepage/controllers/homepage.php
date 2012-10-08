<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->loadLang();
	}
	
	function loadLang()
	{
		$lang=$this->session->userdata('lang');
		if ($lang=='vn')
		{
			$this->lang->load('5sao','vietnamese');
		}
		else $this->lang->load('5sao','english');
	}

	public function index()
	{
		$data['list']=$this->Mhomepage->getListByColumn('sanpham','moi','1');
		$data['title']='5saoviet | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */