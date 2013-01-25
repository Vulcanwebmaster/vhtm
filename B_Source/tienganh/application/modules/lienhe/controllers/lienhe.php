<?php
class Lienhe extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mlienhe');
		$this->load->library('form_validation');
		$this->loadLang();
	}
	
	
	function index()
	{
		$data['list_dichvu']=$this->Mlienhe->getListFull('ta_dichvu');
		$data['list_doitac']=$this->Mlienhe->getListFull('doitac');	
		$data['hotro_online']=$this->Mlienhe->getListFull('hotroonline');
		$data['list_slide']=$this->Mlienhe->getListFull('slide');
		// var_dump($this->Mlienhe->getListFull('ttlienhe'));die();
		$data['list_ttlienhe']=$this->Mlienhe->getListFull('ttlienhe');
		$data['title']='tienganh | Tiếng Anh';
		$data['hotro_online']=$this->Mlienhe->getListFull('hotroonline');
		$data['list_courses'] = $this->Mlienhe->getListFull('ta_courses');
		$data['list_courses_cate'] = $this->Mlienhe->getListFull('ta_courses_cate');
		$data['category']  =  $this->Mlienhe->getListFullCategory('ta_courses');
		$data['module']=$this->module;
		$data['page']='vlienhe';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array('lecturers_category'=>$this->input->post('lecturers_category'),
					'contact_name'=>$this->input->post('contact_name'),
					'contact_phone'=>$this->input->post('contact_phone'),
					'mesage_content'=>$this->input->post('mesage_content'),
					'contact_email'=>$this->input->post('contact_email'));
					//var_dump($input);
					//die();
		return $input;
	}
	
	function send()
	{
		$this->form_validation->set_rules('contact_name','Tên','required|trim');
		$this->form_validation->set_rules('contact_email','Địa chỉ mail','required|trim|valid_email');
		$this->form_validation->set_rules('contact_phone','Số mobile','required|trim|numeric');
		if ($this->form_validation->run())
		{
			
			$input=$this->_input();
			if ($this->Mlienhe->insertNewRow('ta_contact_us',$input))
			{
				$this->session->set_userdata('lienhe_result','Gửi thành công !');
			}
			else $this->session->set_userdata('lienhe_result','Gửi không thành công !');
		}
		
		$this->index();
	}
}