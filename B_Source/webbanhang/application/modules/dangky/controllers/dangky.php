<?php
	class Dangky extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mdangky');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('email');
		}
		
		function index()
		{
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$data['fields']=$this->MKaimonokago->getListFields();			
			$data['page']=$this->config->item('backendpro_template_shop').'vdangky';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function _input()
		{
			$input=array('hoten'=>$this->input->post('hoten'),
						'tencuahang'=>$this->input->post('tencuahang'),
						'id_linhvuc'=>$this->input->post('linhvuc'),
						'email'=>$this->input->post('email'),
						'matkhau'=>$this->input->post('matkhau'),
						'dienthoai'=>$this->input->post('sodienthoai'),
						'diachi'=>$this->input->post('diachi'),
						'website'=>$this->input->post('website')
			);
			return $input;
		}
		
		function creatDangKy()
		{
			if ($this->input->post('submit'))
			{
				$this->form_validation->set_rules('hoten','Họ tên','required|trim');
				$this->form_validation->set_rules('tencuahang','Tên cửa hàng','required|trim');
				$this->form_validation->set_rules('linhvuc','Lĩnh vực','required|trim');
				$this->form_validation->set_rules('email','Email','required|trim|valid_email');
				$this->form_validation->set_rules('matkhau','Mật khẩu','required|trim');
				$this->form_validation->set_rules('nhaplaimatkhau','Nhập lại mật khẩu','required|trim|matches[matkhau]');
				$this->form_validation->set_rules('sodienthoai','Số điện thoại','required|trim');
				$this->form_validation->set_rules('diachi','Địa chỉ','required|trim');
				$this->form_validation->set_rules('website','Website','required|trim');
				$this->form_validation->set_rules('sodienthoai','Số điện thoại','required|trim|numeric');
				$this->form_validation->set_rules('recaptcha_response_field','Mã số','required|trim|valid_captcha');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				$this->form_validation->set_message('valid_email','Mục %s phải là địa chỉ email hợp lệ');
				$this->form_validation->set_message('valid_captcha','Mã số nhập vào không chính xác');
				$this->form_validation->set_message('numeric','Mục %s chỉ được chứa ký tự số');
				$this->form_validation->set_message('matches[matkhau]','Mật khẩu nhập 2 lần không giống nhau');
				
				$this->form_validation->output_errors();
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					$this->Mdangky->dangky($input);
					$this->sendEmail($this->input->post('email'));
					
					$this->session->set_userdata('success','Bạn đã đăng ký thành công. Một email thông báo đã được gửi tới hòm thư của bạn.');
					redirect(base_url().'shopping');
				}
				else $this->index();
			}
			else 
			{
				$this->index();
			}
		}
		
		function sendEmail($toEmail)
		{
			$this->email->to($toEmail);
			$this->email->from('support@niw.com.vn','NIW Shopping Cart');
			$this->email->subject('Đăng ký dùng thử NIW Shopping Cart thành công');
			
			$message='Bạn đã đăng ký dùng thử thành công trên hệ thống NIW Shopping Cart.
			Bạn có thể truy cập trực tiếp vào gian hàng của bạn với thông tin sau:</p>
			Địa chỉ đăng nhập:'.base_url().'
			Tên đăng nhập: '.$this->input->post('email').'
			Mật khẩu: '.$this->input->post('matkhau').'
			
			Xin cảm ơn và chúc bạn thành công !';
			$this->email->message($message);
			$this->email->send();
		}
	}
?>