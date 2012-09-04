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
		}
		
		function index()
		{
			$this->session->unset_userdata('success');
			$this->session->unset_userdata('fail');
			$data['page']=$this->config->item('backendpro_template_shop').'vdangky';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function dangkymoi()
		{
			if ($this->input->post('submit'))
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules('hoten','Họ tên','required|trim');
				$this->form_validation->set_rules('dienthoai','Điện thoại','required|trim|numeric');
				$this->form_validation->set_message('required','%s không được để trống');
				if (!$this->form_validation->run())
				{
					$this->form_validation->output_errors();
				}
				else if ($this->Mdangky->register())
				{
					$this->session->set_userdata('success','Đăng ký thành công');
				}
				else $this->session->set_userdata('fail','Đăng ký không thành công');
			}
			$this->index();
		}
	}
?>