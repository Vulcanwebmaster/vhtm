<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mbaohanh');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			$data['info'] = $this->Mbaohanh->getRowByColumn('baohanh','id',1);
			$data['title'] = 'Sửa bảo hành';
			$data['bcCurrent'] = 'Bảo hành';
			$data['module'] = $this->module;
			$data['page'] = 'admin_vedit';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input = array('noidung_v'=>$this->input->post('noidung_v'),
						'noidung_e'=>$this->input->post('noidung_e'));
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('noidung_v','Nội dung','required|trim');
			
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mbaohanh->updateRowByColumn('baohanh','id',$id,$input))
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