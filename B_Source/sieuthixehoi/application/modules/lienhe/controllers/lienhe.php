<?php
class Lienhe extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mlienhe');
		$this->load->library('form_validation');
	}
	
	
	function index()
	{
		$data['list_tuvan']=$this->Mlienhe->getListFull('tuvansanpham');		
		$data['title']='Sieuthixe | Liên hệ';
		$data['module']=$this->module;
		$data['page']='vlienhe';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array('hoten'=>$this->input->post('hoten'),
					'email'=>$this->input->post('email'),
					'dienthoai'=>$this->input->post('dienthoai'),
					'tieude'=>$this->input->post('tieude'),
					'noidung'=>$this->input->post('noidung'),
					'ngaythang'=>date('Y-m-d',time()+7*3600));
		return $input;
	}
	
	function send()
	{
		$this->form_validation->set_rules('hoten','Họ tên','required|trim');
		$this->form_validation->set_rules('email','email','required|trim|valid_email');
		$this->form_validation->set_rules('dienthoai','Điện thoại','required|trim|numeric');
		$this->form_validation->set_rules('tieude','Tiêu đề','required|trim');
		$this->form_validation->set_rules('noidung','Nội dung','required|trim');
		
		$this->form_validation->set_message('required','Trường %s không được để trống.');
		$this->form_validation->set_message('valid_email','Trường %s phải đúng định dạng email.');
		$this->form_validation->set_message('numeric','Trường %s chỉ được chứa ký tự số.');
		
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			if ($this->Mlienhe->insertNewRow('lienhe',$input))
			{
				$this->session->set_userdata('lienhe_result','Gửi thành công !');
			}
			else $this->session->set_userdata('lienhe_result','Gửi không thành công !');
		}
		
		$this->index();
	}
}