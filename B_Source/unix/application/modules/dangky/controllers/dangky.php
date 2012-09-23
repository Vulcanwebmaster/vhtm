<?php
	class Dangky extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();		
			$this->load->library('session');	
			$this->module=strtolower(get_class());
			$this->load->model('Mdangky');
			$this->load->library('form_validation');
			$this->load->library('email');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vdangky';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function dangkymoi()
		{
			if ($this->input->post('submit'))
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules('hoten','Họ tên','required');
				$this->form_validation->set_rules('dienthoai','Điện thoại','required');
				$this->form_validation->set_message('required','%s không được để trống');
				if (!$this->form_validation->run())
				{
					$this->form_validation->output_errors();
					echo "<script type='text/javascript'>
						alert('Đăng ký không thành công');
					</script>";
					$this->index();
				}
				else if ($this->Mdangky->register())
				{
					$this->email->from('tiennd@niw.com.vn',$this->input->post('hoten') );
					$this->email->to('tiendn1010@gmail.com'); 
					
					$this->email->subject('[Đăng ký][Kiểm tra đầu vào] V/v đăng ký tham gia test đầu vào');
					$this->email->message(
											"Họ tên :".$this->input->post('hoten'). "
											Trường : ".$this->input->post('truonghoc'). "
											Lớp : ".$this->input->post('lop'). "
											Tên phụ huynh : ".$this->input->post('phuhuynh'). "
											Số điện thoại : ".$this->input->post('dienthoai'). "
											Ngày đăng ký : ".date('d/m/Y - g:i A')
										);	
					$this->email->send();		
					echo "<script type='text/javascript'>
						alert('Đăng ký thành công');
					</script>";	
					redirect(base_url().'index.php/dangky','refresh');				
				}
			}
		}
	}
?>