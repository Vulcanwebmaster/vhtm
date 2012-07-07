<?php
	class Lienhe extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('form_validation');
			$this->load->library('email');
			$this->load->library('session');
		}
		
		function index()
		{
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$this->load->library('recaptcha');
		    $data['captcha']=$this->recaptcha->get_html();
			$data['page']=$this->config->item('backendpro_template_shop').'vlienhe';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function sendMail()
		{
			if ($this->input->post('submit'))
			{
				$this->form_validation->set_rules('name','Tên','required|trim');
				$this->form_validation->set_rules('email','Email','required|trim|valid_email');
				$this->form_validation->set_rules('phonenumber','Điện thoại','required|trim');
				$this->form_validation->set_rules('message','Lời nhắn','required|trim');
				$this->form_validation->set_rules('name','Tên','required|trim');
				$this->form_validation->set_rules('recaptcha_response_field','recaptcha_response_field','required|trim|valid_captcha');
				
				if (!$this->form_validation->run())
				{
					$this->form_validation->set_message('required','Trường %s không được bỏ trống');
					$this->form_validation->set_message('valid_email','Trường %s phải đúng định dạng email');
					$this->form_validation->set_message('valid_captcha','Mã số nhập vào không chính xác');
					$this->form_validation->output_errors();
				}
				else 
				{
					$this->email->from($this->input->post('email'), $this->input->post('name'));
					$this->email->to('mooncavalier110205@gmail.com');
					$this->email->subject(substr($this->input->post('message'), 0, 20));
					$this->email->message($this->input->post('message'));
					
					$this->email->send();
					$this->session->set_flashdata('message','Tin nhắn của bạn đã được gửi thành công.');
				}
				$this->index();
			}
		}
	}
?>