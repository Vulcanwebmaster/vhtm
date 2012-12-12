<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgioithieu');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			$data['info'] = $this->Mgioithieu->getRowByColumn('ta_about_us','about_id',1);
			$data['title'] = 'Sửa giới thiệu';
			$data['bcCurrent'] = 'Giới thiệu';
			$data['module'] = $this->module;
			$data['page'] = 'admin_edit_aboutus';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input = array(
						'about_content'=>$this->input->post('about_content'));
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('about_content','Nội dung','required|trim');
			
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mgioithieu->updateRowByColumn('ta_about_us','about_id',$id,$input))
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
