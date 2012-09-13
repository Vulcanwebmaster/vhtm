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
		
		if ($this->session->userdata('lang')=='vn')
		{
			$this->lang->load('mc','vietnamese');
		}
		else $this->lang->load('mc','english');
	}
	
	public function index()
	{
		$data['items']=$this->Mhomepage->getListByColumn('mc_product','is_new',1);
		$data['parents']=$this->Mhomepage->getListByColumn('mc_category','parent_id',0);
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}
?>
