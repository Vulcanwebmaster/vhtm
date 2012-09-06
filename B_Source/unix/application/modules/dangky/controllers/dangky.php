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
					echo "<script type='text/javascript'>
						alert('Đăng ký thành công');
					</script>";	
					$this->index();				
				}
			}
		}
	}
?>