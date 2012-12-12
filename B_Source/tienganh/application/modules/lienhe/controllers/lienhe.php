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
		$data['list_tuvan']=$this->Mlienhe->getListFull('ta_contact_us');		
		$data['title']='tienganh | Tiếng Anh';
		$data['module']=$this->module;
		$data['page']='vlienhe';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array('contact_name'=>$this->input->post('contact_name'),
					'contact_title'=>$this->input->post('contact_title'),
					'contact_address'=>$this->input->post('contact_address'),
					'contact_phone'=>$this->input->post('contact_phone'),
					'contact_content'=>$this->input->post('contact_content'),
					'contact_email'=>date('Y-m-d',time()+7*3600));
		return $input;
	}
	
	function send()
	{
		$this->form_validation->set_rules('contact_name','TÊN','required|trim');
		$this->form_validation->set_rules('contact_email','ĐỊA CHỈ MAIL','required|trim|valid_email');
		$this->form_validation->set_rules('contact_phone','SỐ MOBILE','required|trim|numeric');
		$this->form_validation->set_rules('contact_title','BẠN QUAN TÂM ĐẾN','required|trim');
		$this->form_validation->set_rules('contact_content','NỘI DUNG THÔNG ĐIỆP','required|trim');
		
		$this->form_validation->set_message('required','Trường %s không được để trống.');
		$this->form_validation->set_message('valid_email','Trường %s phải đúng định dạng email.');
		$this->form_validation->set_message('numeric','Trường %s chỉ được chứa ký tự số.');
		
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