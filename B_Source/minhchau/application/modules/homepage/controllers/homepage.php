<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		
		$this->load->model('Mhomepage');
		$this->load->library('session');
		$this->setLang();
		$this->loadLang();
	}
	
	public function index()
	{
		$data['lang']=$this->session->userdata("lang");
		$data['listcate']=$this->Mhomepage->getListByColumn('mc_category','parent_id',0);
		$data['aboutus']=$this->Mhomepage->getRowByColumn('mc_about_us','id',1);
		$data['listnew']=$this->Mhomepage->getListByColumn('mc_product','is_new',1);
		$data['title']='[Name Defined] | Home';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */