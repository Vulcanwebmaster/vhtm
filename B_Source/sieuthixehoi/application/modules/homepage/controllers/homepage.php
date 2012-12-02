<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('session');
		$this->load->helper('text');
		$this->load->library('pagination');
		$this->load->helper('url');
	}
	
	public function index($index=0)
	{
		$config['base_url'] = base_url().'index';
		$config['per_page'] = 18;
		$config['total_rows'] = count($this->Mhomepage->getListFull('xh_product'));
		$this->pagination->initialize($config);
		
		//phai limit de lay so trang can phan
		$data['items'] = $this->Mhomepage->getListOffset('xh_product',18,$index);
		
		$data['title']='[Name Defined] | Home';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */