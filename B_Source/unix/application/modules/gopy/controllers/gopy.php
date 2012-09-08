<?php
	class Gopy extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mgopy');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vlienhe';
			$data['module']=$this->module;
			$data['tieude']="GÓP Ý";
			$this->load->view($this->_container,$data); 
		}
		
		function submit()
		{
			if ($this->input->post('submit'))
			{
				$this->form_validation->set_rules('hoten','hoten','required');
				$this->form_validation->set_rules('email','email','required|valid_email');
				$this->form_validation->set_rules('tieude','tieude','required');
				$this->form_validation->set_rules('noidung','noidung','required');
				$this->form_validation->set_rules('dienthoai','dienthoai','required');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				$this->form_validation->set_message('valid_email','Mục %s chưa đúng định dạng email');
				
				
				if ($this->form_validation->run())
				{
					$this->Mgopy->insert();
					$this->session->set_userdata('message','Thông điệp của bạn đã được gửi thành công.');
					$this->index();
				}
				else  
				{
					$data['page']=$this->config->item('backendpro_template_shop').'vlienhe';
					$data['module']=$this->module;
					$data['tieude']="LIÊN HỆ";
					$this->load->view($this->_container,$data); 
				}
			}
		}
	}
?>