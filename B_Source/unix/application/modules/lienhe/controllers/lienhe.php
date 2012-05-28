<?php
	class Lienhe extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mlienhe');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vlienhe';
			$data['module']=$this->module;
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
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				$this->form_validation->set_message('valid_email','Giá trị %s phải đúng định dạng email');
				
				
				if ($this->form_validation->run())
				{
					$this->Mlienhe->insert();
					redirect(base_url().'index.php/lienhe','refresh');
				}
				else  
				{
					$data['page']=$this->config->item('backendpro_template_shop').'vlienhe';
					$data['module']=$this->module;
					$this->load->view($this->_container,$data); 
				}
			}
		}
	}
?>