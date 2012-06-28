<?php
	class Dangky extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();		
			$this->load->library('session');	
			$this->module=strtolower(get_class());
		}
		
		function get_input()
		{
			$input=array('hoten'=>$this->input->post('hoten'),
						'truong'=>$this->input->post('truonghoc'),
						'lop'=>$this->input->post('lop'),
						'phuhuynh'=>$this->input->post('phuhuynh'),
						'dienthoai'=>$this->input->post('dienthoai'));
			return $input;
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
				$this->form_validation->set_rules('hoten','Họ tên','required|trim');
				$this->form_validation->set_rules('dienthoai','Điện thoại','required|trim|numeric');
				
				if (!$this->form_validation->run())
				{
					$this->form_validation->output_errors();
				}
				else 
				{
					$input=$this->get_input();
					if ($this->MKaimonokago->register($input))
					{
						echo '<script language=javascript>
							alert("Đăng ký thành công");
						</script>';
					}
					else 
						echo '<script language=javascript>
							alert("Đăng ký thành công");
						</script>';
				}
			}
			$this->index();
		}
	}
?>