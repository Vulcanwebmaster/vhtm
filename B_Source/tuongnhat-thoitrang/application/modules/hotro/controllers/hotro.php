<?php
	class Hotro extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mhotro');
			$this->load->library('form_validation');
		}
		
		function doRegister()
		{
			$this->form_validation->set_rules('email','Email','required|trim|valid_email');
			$this->form_validation->set_message('required','Trường %s không được bỏ trống');
			$this->form_validation->set_message('valid_email','Trường %s phải nhập đúng định dạng email');
			
			if ($this->form_validation->run())
			{
				$input=array('email'=>$this->input->post('email'));
				if ($this->Mhotro->insertNewRow('n_t_hotro',$input))
				{
					$data['result']='Thông tin của bạn được gửi thành công. Chúng tôi sẽ liên lạc với bạn theo email bạn đã đăng ký !';
				}
				else $data['result']='Có lỗi xảy ra trong quá trình thực thi !';
			}
			else $data['result']='Có lỗi xảy ra trong quá trình thực thi !';
			$data['page']='vhotro';
			$data['module']=$this->module;
			$this->load->view('front/container',$data);
		}
	}
?>