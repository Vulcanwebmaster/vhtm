<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		
		$this->SetLang();
		
		if ($this->session->userdata('lang')=='vn')
			$this->lang->load('tn','vietnamese');
		else $this->lang->load('tn','english');
	}
	
	public function index()
	{
		$data['column1']=$this->Mhomepage->getRowById('1');
		$data['column2']=$this->Mhomepage->getRowById('2');
		$data['column3']=$this->Mhomepage->getRowById('3');
		$data['column4']=$this->Mhomepage->getRowById('4');
		
		$data['title']='Tuong Nhat | Home';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */