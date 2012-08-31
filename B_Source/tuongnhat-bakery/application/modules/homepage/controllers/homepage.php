<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->library('session');
		$this->load->model('Mhomepage');
		
		$this->SetLangSession();
		
		if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
	}
	
	function SetLangSession()
	{
		if ($this->session->userdata('lang')=='')
		{
			$this->session->set_userdata('lang','vn');
		}
	}
	
	public function index()
	{
		$data['list']=$this->Mhomepage->getListFull();
		$data['rightmenu']=$this->Mhomepage->getRightColumn();
		$data['title']='Tuong Nhat Bakery';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */