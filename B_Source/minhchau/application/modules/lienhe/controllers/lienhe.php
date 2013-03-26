<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->load->model('Mlienhe');
			$this->load->library('session');
			$this->setLang();
			$this->loadLang();
		}
		
		function index()
		{
			$data['lang']=$this->session->userdata("lang");
			$data['nd_gioithieu']=$this->Mlienhe->getRowByColumn('mc_contact_us','id',1);
			$data['listcate']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mlienhe->getListFull('mc_contact_us');
			$data['module']=$this->module;
					
			$data['page'] = 'vlienhe';
			$this->load->view('front/container',$data);
		}
	function _input()
	{
		$input=array('hoten'=>$this->input->post('hoten'),
					'congty'=>$this->input->post('congty'),
					'email'=>$this->input->post('email'),
					'tieude'=>$this->input->post('tieude'),
					'noidung'=>$this->input->post('noidung'),
					);
		return $input;
	}
	
	function send()
	{
		$input=$this->_input();
			if ($this->Mlienhe->insertNewRow('phanhoi',$input))
			{
				$this->session->set_userdata('result','Gửi thành công !');
			}
			else $this->session->set_userdata('result','Gửi không thành công !');
		redirect(base_url().'lienhe','refresh');
	}
	}
?>