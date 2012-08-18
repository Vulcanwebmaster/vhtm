<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->SetLangSession();
			
			$this->load->model('Mlienhe');
			$this->load->library('recaptcha');
			$this->load->library('form_validation');
			$this->load->helper('form');
			
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else
				$this->lang->load('tuongnhat','english');
		}

		function index()
		{			
			$data['title']='Tuong Nhat Bakery - Lien he';
			$data['module']=$this->module;
			$data['page']='vlienhe';
			$data['captcha']=$this->recaptcha->get_html();
			$this->load->view('front/container',$data);
		}
		
		function _GetInput()
		{
			$input=array('hoten'=>$this->input->post('hoten'),
						'congty'=>$this->input->post('congty'),
						'makhachhang'=>$this->input->post('makhachhang'),
						'pho'=>$this->input->post('pho'),
						'thanhpho'=>$this->input->post('thanhpho'),
						'email'=>$this->input->post('email'),
						'dienthoai'=>$this->input->post('dt'),
						'cauhoi'=>$this->input->post('cauhoi')
			);
			return $input;
		}
		
		function send()
		{
			if ($this->input->post('hoten'))
			{
				$this->form_validation->set_rules('hoten','Họ tên','required|trim');
				$this->form_validation->set_rules('congty','Công ty','required|trim');
				$this->form_validation->set_rules('dt','Điện thoại','required|trim');
				$this->form_validation->set_rules('email','Email','valid_email|trim');
				$this->form_validation->set_rules('recaptcha_response_field','Mã số','required|trim|valid_captcha');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				$this->form_validation->set_message('valid_email','Mục %s phải đúng định dạng email');
				$this->form_validation->set_message('valid_captcha','Mã kiểm tra không đúng');
				
				if ($this->form_validation->run())
				{
					$input=$this->_GetInput();
					if ($this->Mlienhe->InsertContact($input))
						$this->session->set_userdata('message','Liên hệ thành công');
					else $this->session->set_userdata('message','Liên hệ không thành công');
				}
			}
			$this->index();
		}
	}
?>