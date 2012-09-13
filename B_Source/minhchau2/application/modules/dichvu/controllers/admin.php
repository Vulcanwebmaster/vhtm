<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdichvu');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			$data['info'] = $this->Mdichvu->getOne();
			$data['title'] = 'Sửa dịch vụ';
			$data['bcCurrent'] = 'Dịch vụ';
			$data['module'] = $this->module;
			$data['page'] = 'admin_edit_services';
			$this->load->view('admin/container',$data);
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('contentv','Nội dung','required|trim');
			
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			if ($this->form_validation->run())
			{
				if ($this->Mdichvu->updateDichVu())
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$this->index();
			}
		}
	}
?>