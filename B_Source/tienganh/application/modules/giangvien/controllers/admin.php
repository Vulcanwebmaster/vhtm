<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgiangvien');
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
			$config['base_url']=base_url().'giangvien/admin/page/';
			$config['per_page']=12;
			//var_dump($this->Mgiangvien->getListFull('ta_lecturers'));die();
			$config['total_rows']=count($this->Mgiangvien->getListFull('ta_lecturers'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin giảng viên';
			$data['bcCurrent']='giảng viên';
			$data['list']=$this->Mgiangvien->getListOffset('ta_lecturers',12,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'lecturers_title'=>$this->input->post('lecturers_title'),
						'lecturers_category'=>$this->input->post('lecturers_category'),
						'lecturers_content'=>$this->input->post('lecturers_content'),
						'lecturers_image'=>$this->input->post('lecturers_image'),
						'alias'=>$this->getAliasByName($this->input->post('lecturers_title')),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('lecturers_category'))
			{
				$data['list']=$this->Mgiangvien->getListFull('ta_lecturers');
				$data['title']='Thêm thông tin giảng viên';
				$data['bcCurrent']='giảng viên';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('lecturers_title','Tiêu đề','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					// var_dump($this->input->post('lecturers_image'));die();
					$input=$this->_input();
					if ($this->Mgiangvien->insertNewRow('ta_lecturers',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgiangvien->getListFull('ta_lecturers');
					$data['title']='Thêm thông tin giảng viên';
					$data['bcCurrent']='giảng viên';
					$data['module']=$this->module;
					$data['page']='admin_vinsert';
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
			if (!$this->input->post('lecturers_category'))
			{
				$data['list']=$this->Mgiangvien->getListFull('ta_lecturers');
				$data['info']=$this->Mgiangvien->getRowByColumn('ta_lecturers','lecturers_id',$id);
				$data['title']='Sửa thông giảng viên';
				$data['bcCurrent']='giảng viên';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('lecturers_title','Tiêu đề','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgiangvien->updateRowByColumn('ta_lecturers','lecturers_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgiangvien->getListFull('ta_lecturers');
					$data['info']=$this->Mgiangvien->getRowByColumn('ta_lecturers','lecturers_id',$id);
					$data['title']='Sửa thông giảng viên';
					$data['bcCurrent']='giảng viên';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mgiangvien->deleteRowByColumn('ta_lecturers','lecturers_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		}
		