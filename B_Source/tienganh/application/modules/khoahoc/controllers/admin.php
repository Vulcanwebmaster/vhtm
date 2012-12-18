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
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'khoahoc/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mkhoahoc->getListFull('ta_courses'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Khóa học';
			$data['bcCurrent']='khóa học';
			$data['list']=$this->Mkhoahoc->getListOffset('ta_courses',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'courses_name'=>$this->input->post('courses_name'),
						'courses_category'=>$this->input->post('courses_category'),
						'courses_date'=>$this->input->post('courses_date'),
						'courses_content'=>$this->input->post('courses_content'),
						'alias'=>$this->getAliasByName($this->input->post('courses_name')),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('courses_name'))
			{
				$data['list']=$this->Mkhoahoc->getListFull('ta_courses');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm khóa học';
				$data['bcCurrent']='Khóa học';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('courses_name','Tên ','required|trim');
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
					$data['list']=$this->Mkhoahoc->getListFull('ta_courses');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm khóa học';
					$data['bcCurrent']='khóa học';
					$data['module']=$this->module;
					$data['page']='admin_vinsert';
					$this->load->view('admin/container',$data);
				}
			}
		}
		

		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('courses_name'))
			{
				$data['info']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$id);
				$data['title']='Sửa khóa học';
				$data['bcCurrent']='Khóa học';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('courses_name','Tên','required|trim');
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
					$data['info']=$this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$id);
					$data['title']='Sửa Khóa học';
					$data['bcCurrent']='Khóa học';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
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
?>