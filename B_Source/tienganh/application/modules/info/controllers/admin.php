<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Minfo');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Thông tin';
			$data['bcCurrent']='Thông tin';
			$data['list']=$this->Minfo->getListFull('ta_info');
			$data['module']=$this->module;
			$data['page']='admin_list_info';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('info_id'	=>	$this->input->post('info_id'),
						'info_name'		=>	$this->input->post('info_name'),
						'info_content'	=>	$this->input->post('info_content'));
			return $input;
			
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('info_name'))
			{
				$data['list']=$this->Minfo->getListByColumn('ta_info','info_id','0');
				$data['title']='Thêm thông tin';
				$data['bcCurrent']='Thông tin';
				$data['module']=$this->module;
				$data['page']='admin_insert_info';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('info_name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Minfo->insertNewRow('ta_info',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Minfo->getListByColumn('ta_info','info_id','0');
					$data['title']='Thêm thông tin';
					$data['bcCurrent']='Thông tin';
					$data['module']=$this->module;
					$data['page']='admin_insert_info';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('info_name'))
			{
				$data['list']=$this->Minfo->getListByColumn('ta_info','info_id','0');
				$data['info']=$this->Minfo->getRowByColumn('ta_info','info_id',$id);
				$data['title']='Sửa thông tin';
				$data['bcCurrent']='Thông tin';
				$data['module']=$this->module;
				$data['page']='admin_edit_info';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('info_name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Minfo->updateRowByColumn('ta_info','info_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Minfo->getListByColumn('ta_info','info_id','>0');
					$data['info']=$this->Minfo->getRowByColumn('ta_info','info_id',$id);
					$data['title']='Sửa thông tin';
					$data['bcCurrent']='Thông tin';
					$data['module']=$this->module;
					$data['page']='admin_edit_info';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Minfo->deleteRowByColumn('ta_info','info_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		
	}
