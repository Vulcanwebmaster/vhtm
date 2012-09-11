<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->model('Mhomepage');
		$this->load->library('session');
		$this->setLang();
	}
	
	public function index()
	{
		$data['listcate']=$this->Mhomepage->getListByColumn('mc_category','parent_id',0);
		$data['title']='[Name Defined] | Home';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */