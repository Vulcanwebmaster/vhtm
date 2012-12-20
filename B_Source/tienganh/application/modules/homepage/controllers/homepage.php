<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->load->library('form_validation');
		//var_dump($_SESSION['front_user_fullname']); die();
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		
		$data['list']=$this->Mhomepage->getListByColumn('ta_vedio', 'vedio_title', 0);
		$data['list_doitac']=$this->Mhomepage->getListFull('doitac');
		$data['list_tintuc']=$this->Mhomepage->getListOffset('ta_news',3,0);
		$data['list_khoahoc']=$this->Mhomepage->getListOffset('ta_courses',3,$index);
		$data['list_slide']=$this->Mhomepage->getListFull('slide');
		$data['hotro']=$this->Mhomepage->getListFull('hotroonline');
		$data['title']='tienganh | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array(
					
					'e_mail'=>$this->input->post('e_mail'));
					
					//var_dump($input);
					//die();
		return $input;
	}
	
	function send()
	{
		$this->form_validation->set_rules('e_mail','Địa chỉ mail','required|trim|valid_email');
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			if ($this->Mhomepage->insertNewRow('email',$input))
			{
				$this->session->set_userdata('email_result','Gửi thành công !');
			}
			else $this->session->set_userdata('email_result','Gửi không thành công !');
		}
		
		$this->page();
	}
}