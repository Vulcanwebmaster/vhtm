<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Giaohang extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->library('session');
		
		if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
		$this->load->model('Mgiaohang');
	}
	
	function SetLangSession()
	{
		if ($this->session->userdata('lang')=='')
		{
			$this->session->userdata('lang','vn');
		}
	}
	
	public function index()
	{
		$this->SetLangSession();
		$data['rightmenu']=$this->Mgiaohang->getRightColumn();
		$data['title']='Tuong Nhat Bakery - Giao hang';
		$data['module'] = $this->module;
		$data['page'] = 'vgiaohang';
		$data['info']=$this->Mgiaohang->getData();
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */