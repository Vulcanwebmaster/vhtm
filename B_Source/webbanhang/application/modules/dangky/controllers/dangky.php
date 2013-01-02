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
			$data['title']='Website bán hàng chuyên nghiệp - Đăng ký';
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$data['fields']=$this->MKaimonokago->getListFields();			
			$data['page']=$this->config->item('backendpro_template_shop').'vdangky';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function banhang($seller_name)
		{
			$this->session->set_userdata('seller_name',$seller_name);
			$this->index();
		}
		
		function _input($enable=true)
		{
			if ($enable==true)
			{
				if ($this->session->userdata('seller_name'))
				{
					$admin_name=$this->session->userdata('seller_name');
					$input=array('ngaythang'=>date('Y-m-d'),
								'hoten'=>$this->input->post('hoten'),
								'tencuahang'=>$this->input->post('tencuahang'),
								'id_linhvuc'=>$this->input->post('linhvuc'),
								'email'=>$this->input->post('email'),
								'matkhau'=>$this->input->post('matkhau'),
								'dienthoai'=>$this->input->post('sodienthoai'),
								'diachi'=>$this->input->post('diachi'),
								'demo_id'=>$this->Mdangky->getEnableDemo()->demo_id,
								'admin_id'=>$this->Mdangky->GetSellerByName($admin_name)->id
					);
				}
				else
				{
					$input=array('ngaythang'=>date('Y-m-d'),
								'hoten'=>$this->input->post('hoten'),
								'tencuahang'=>$this->input->post('tencuahang'),
								'id_linhvuc'=>$this->input->post('linhvuc'),
								'email'=>$this->input->post('email'),
								'matkhau'=>$this->input->post('matkhau'),
								'dienthoai'=>$this->input->post('sodienthoai'),
								'diachi'=>$this->input->post('diachi'),
								'demo_id'=>$this->Mdangky->getEnableDemo()->demo_id
					);
				}
			}
			else 
			{
				$input=array('ngaythang'=>date('Y-m-d'),
								'hoten'=>$this->input->post('hoten'),
								'tencuahang'=>$this->input->post('tencuahang'),
								'id_linhvuc'=>$this->input->post('linhvuc'),
								'email'=>$this->input->post('email'),
								'matkhau'=>$this->input->post('matkhau'),
								'dienthoai'=>$this->input->post('sodienthoai'),
								'diachi'=>$this->input->post('diachi'),
								'demo_id'=>'0'
					);
			}
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
				$this->form_validation->set_rules('diachi','Địa chỉ','required|trim');
				$this->form_validation->set_rules('sodienthoai','Số điện thoại','required|trim|numeric');
				$this->form_validation->set_rules('recaptcha_response_field','Mã số','required|trim|valid_captcha');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				$this->form_validation->set_message('valid_email','Mục %s phải là địa chỉ email hợp lệ');
				$this->form_validation->set_message('valid_captcha','Mã số nhập vào không chính xác');
				$this->form_validation->set_message('numeric','Mục %s chỉ được chứa ký tự số');
				$this->form_validation->set_message('matches','Mật khẩu nhập 2 lần không giống nhau');
				
				$this->form_validation->output_errors();
				if ($this->form_validation->run())
				{
					$idLinhVuc=$this->input->post('linhvuc');
					if ($idLinhVuc==0)
					{
						$this->session->set_userdata('error_message','Hãy chọn lĩnh vực kinh doanh');
						$this->index();
					}
					else 
					{
						if ($this->Mdangky->getEnableDemo())
						{
							$input=$this->_input(true);
							$this->Mdangky->dangky($input);
							
							$demo=$this->Mdangky->getEnableDemo();
							$this->sendEmail($this->input->post('email'),$demo);
								
							$this->Mdangky->setDisableDemoById($demo->demo_id);
							
							$this->session->unset_userdata('seller_name');
							
							
							//redirect(base_url().$demo->demo_name);
							echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
							echo '<script language=javascript>
								alert("Bạn đã đăng ký thành công. Một email đã được gửi tới địa chỉ mail của bạn. \nHãy sử dụng thông tin sau để đăng nhập trang quản trị:
								\nTài khoản: admin
								\nMật khẩu: khongcopass");
								window.open("'.base_url().$demo->demo_name.'/admin", "NIW Shopping Cart - Trang quản trị", "window settings");
								window.location="'.base_url().$demo->demo_name.'";
							</script>';
						}
						else
						{
							$this->Mdangky->resetDemoTable();
							$input=$this->_input(true);
							$this->Mdangky->dangky($input);
							
							
							
							$demo=$this->Mdangky->getEnableDemo();
							$this->sendEmail($this->input->post('email'),$demo);
								
							$this->Mdangky->setDisableDemoById($demo->demo_id);
							
							$this->session->unset_userdata('seller_name');
													
							//redirect(base_url().$demo->demo_name);
							
							echo '<script language=javascript>
								alert("Bạn đã đăng ký thành công. Một email đã được gửi tới địa chỉ mail của bạn. \nHãy sử dụng thông tin sau để đăng nhập trang quản trị:
								\nTài khoản: admin
								\nMật khẩu: khongcopass");
								window.open("'.base_url().$demo->demo_name.'/admin", "NIW Shopping Cart - Trang quản trị", "window settings");
								window.location="'.base_url().$demo->demo_name.'";
							</script>';
							
							/*$input=$this->_input(false);
							$this->Mdangky->dangky($input);
							
							$message='Hiện tại, số thư mục demo của hệ thống đã hết. Hãy cập nhật thêm thư mục.';
							mail('support@niw.com.vn','Websitebanhang: Báo cáo quá tải',$message);
							mail('mooncavalier110205@gmail.com','Websitebanhang: Báo cáo quá tải',$message);							
							$this->index();*/
						}
					}
				}
				else $this->index();
			}
			else 
			{
				$this->index();
			}
		}
		
		function sendEmail($toEmail,$demo)
		{
			$subject="Đăng ký dùng thử NIW Shopping Cart thành công";
			$message='Bạn đã đăng ký dùng thử thành công trên hệ thống NIW Shopping Cart.
			Bạn có thể truy cập trực tiếp vào gian hàng của bạn với thông tin sau:
			Địa chỉ gian hàng:'.base_url().$demo->demo_name.'
			Địa chỉ trang quản trị:'.base_url().$demo->demo_name.'/admin
			Tên đăng nhập: admin
			Mật khẩu: khongcopass
			
			Xin cảm ơn và chúc bạn thành công !';
			mail($toEmail,$subject,$message);			
		}
	}
?>