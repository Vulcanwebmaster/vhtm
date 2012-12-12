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
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Giới thiệu';
			$data['bcCurrent']='Giới thiệu';
			$data['list']=$this->Mgioithieu->getListFull('ta_about_us');
			$data['module']=$this->module;
			$data['page']='admin_list_about';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(//k chua about_id de bi trung lap
						'about_title'		=>	$this->input->post('about_title'),
						'about_image'		=>	$this->input->post('about_image'),
						'about_content'	=>	$this->input->post('about_content'));
			return $input;
			
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('about_title'))
			{
				$data['list']=$this->Mgioithieu->getListByColumn('ta_about_us','about_id','0');
				$data['title']='Thêm giới thiệu';
				$data['bcCurrent']='Giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_insert_about';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('about_title','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgioithieu->insertNewRow('ta_about_us',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgioithieu->getListByColumn('ta_about_us','about_id','0');
					$data['title']='Thêm giới thiệu';
					$data['bcCurrent']='Giới thiệu';
					$data['module']=$this->module;
					$data['page']='admin_insert_about';
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
			if (!$this->input->post('about_title'))
			{
				$data['list']=$this->Mgioithieu->getListByColumn('ta_about_us','about_id','0');
				$data['info']=$this->Mgioithieu->getRowByColumn('ta_about_us','about_id',$id);
				$data['title']='Sửa giới thiệu';
				$data['bcCurrent']='Giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_edit_about';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('about_title','Tên','required|trim');
				
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
					$data['list']=$this->Mgioithieu->getListByColumn('ta_about_us','about_id','>0');
					$data['info']=$this->Mgioithieu->getRowByColumn('ta_about_us','about_id',$id);
					$data['title']='Sửa giới thiệu';
					$data['bcCurrent']='Giới thiệu';
					$data['module']=$this->module;
					$data['page']='admin_edit_about';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mgioithieu->deleteRowByColumn('ta_about_us','about_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		
	}
