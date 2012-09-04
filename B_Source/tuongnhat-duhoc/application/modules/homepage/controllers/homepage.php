<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
	}
	
	public function index()
	{
		$data['coso']=$this->Mhomepage->getCoSo(0);
		$data['giangday']=$this->Mhomepage->getCoSo(1);
		$data['title']='[Name Defined] | Home';
		$data['loaikhoahoc']=$this->Mhomepage->list_loaikhoahoc();
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */