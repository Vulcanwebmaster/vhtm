<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mkhoahoc');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='khóa học';
			$data['bcCurrent']='khóa học';
			$data['list']=$this->Mkhoahoc->getListCategory('ta_courses');
			$data['module']=$this->module;
			$data['page']='admin_list_courses';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('courses_name'=>$this->input->post('courses_name'),
						'courses_date'=>$this->input->post('courses_date'),
						
						'courses_category'=>$this->input->post('courses_category'),
						'courses_content'=>$this->input->post('courses_content'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('courses_name'))
			{
				$data['list']=$this->Mkhoahoc->getListFull('ta_courses_cate');
				$data['title']='Thêm khóa học';
				$data['bcCurrent']='khóa học';
				$data['module']=$this->module;
				$data['page']='admin_insert_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('courses_name','Tên','required|trim');
				$this->form_validation->set_rules('courses_category','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mkhoahoc->insertNewRow('ta_courses',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mkhoahoc->getListFull('ta_courses_cate');
					$data['title']='Thêm khóa học';
					$data['bcCurrent']='khóa học';
					$data['module']=$this->module;
					$data['page']='admin_insert_courses';
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
			if (!$this->input->post('courses_name'))
			{
				$data['list']=$this->Mkhoahoc->getListFull('ta_courses_cate');
				$data['info']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$id);
				$data['title']='Sửa khóa học';
				$data['bcCurrent']='khóa học';
				$data['module']=$this->module;
				$data['page']='admin_edit_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('courses_name','Tên','required|trim');
				$this->form_validation->set_rules('courses_category','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mkhoahoc->updateRowByColumn('ta_courses','courses_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mkhoahoc->getListFull('ta_courses_cate');
					$data['info']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$id);
					$data['title']='Sửa khóa học';
					$data['bcCurrent']='khóa học';
					$data['module']=$this->module;
					$data['page']='admin_edit_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mkhoahoc->deleteRowByColumn('ta_courses','courses_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
