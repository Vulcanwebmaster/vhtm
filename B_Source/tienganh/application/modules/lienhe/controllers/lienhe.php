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
	}
	
	
	function index()
	{
		$data['list_doitac']=$this->Mlienhe->getListFull('doitac');	
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
					'contact_content'=>$this->input->post('contact_content'),
					'contact_email'=>date('Y-m-d',time()+7*3600));
					//var_dump($input);
					//die();
		return $input;
	}
	
	function send()
	{
		$this->form_validation->set_rules('contact_name','Tên','required|trim');
		$this->form_validation->set_rules('contact_email','Địa chỉ mail','required|trim|valid_email');
		$this->form_validation->set_rules('contact_phone','Số mobile','required|trim|numeric');
		//chu y
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