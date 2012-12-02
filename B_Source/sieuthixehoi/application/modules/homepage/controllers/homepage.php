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
		$this->chevrolet();		
	}
	
	function chevrolet($index=0)
		{
			$data['list_tuvan']=$this->Mhomepage->getListFull('tuvansanpham');
		
			$data['title']='[Name Defined] | Home';
		
		// list products
			/*$config['base_url']=base_url().'homepage/chevrolet/';
			$config['per_page']= 4;
			$config['total_rows']=count($this->Mhomepage->getListByColumn('xh_product','hangsx','Chevrolet'));
			//var_dump($config['total_rows']);die();
			$this->pagination->initialize($config);*/
			
			$config['base_url']=base_url().'homepage/chevrolet/';
			$config['per_page']= 15;
			$config['total_rows']=count($this->Mhomepage->getListByColumn('xh_product','hangsx','Chevrolet'));
			//var_dump($config['total_rows']);die();
			$this->pagination->initialize($config);
			
			$data['items']=$this->Mhomepage->getListByColumnOffset('xh_product','hangsx','Chevrolet',$index,15);
			//var_dump($data['items']);die();	
			$data['module']=$this->module;
			$data['page']='frontpage';
			$this->load->view('front/container',$data);	
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */