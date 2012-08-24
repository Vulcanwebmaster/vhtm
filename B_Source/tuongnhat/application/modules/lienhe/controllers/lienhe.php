<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Mlienhe');
			
			//Language:
			$this->SetLang();
		
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tn','vietnamese');
			else $this->lang->load('tn','english');
		}
		
		function index()
		{
			$data['module']=$this->module;
			$data['page']='vlienhe';
			$this->load->view('front/container',$data);
		}
		
		function _GetInput()
		{
			$input=array('ten'=>$this->input->post('ten'),
						'email'=>$this->input->post('email'),
						'thongtin'=>$this->input->post('thongtin')
			);
			return $input;
		}
		
		function Insert()
		{
			if ($this->input->post('ten'))
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				$this->form_validation->set_rules('email','Email','required|trim|valid_email');
				$this->form_validation->set_rules('thongtin','Thông tin','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				$this->form_validation->set_message('valid_email','Mục %s phải nhập đúng định dạng');
				
				if ($this->form_validation->run())
				{
					$input=$this->_GetInput();
					if ($this->Mlienhe->Insert($input))
					{
						if ($this->session->userdata('lang','vn'))
							$this->session->set_userdata('result','Thông tin của bạn đã được gửi thành công');
						else $this->session->set_userdata('result','Your message has sent succesful');
					}
					else 
					{
						if ($this->session->userdata('lang','vn'))
							$this->session->set_userdata('result','Không thành công');
						else $this->session->set_userdata('result','Your message has not sent. Try again!');
					}
				}
			}
			$this->index();
		}
	}
?>