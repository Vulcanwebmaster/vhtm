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
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'gioithieu/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mgioithieu->getListFull('ta_about_us'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Giới thiệu';
			$data['bcCurrent']='giới thiệu';
			$data['list']=$this->Mgioithieu->getListOffset('ta_about_us',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						//'about_category'=>$this->input->post('about_category'),
						'about_content'=>$this->input->post('about_content'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('about_category'))
			{
				$data['list']=$this->Mgioithieu->getListFull('ta_about_us');
				$data['title']='Thêm thông tin giới thiệu';
				$data['bcCurrent']='giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('about_category','Tên','required|trim');
				$this->form_validation->set_rules('about_content','Tên','required|trim');
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
					$data['list']=$this->Mgioithieu->getListFull('ta_about_us');
					$data['title']='Thêm thông tin giới thiệu';
					$data['bcCurrent']='giới thiệu';
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
			if (!$this->input->post('about_content'))
			{
				$data['list']=$this->Mgioithieu->getListFull('ta_about_us');
				$data['info']=$this->Mgioithieu->getRowByColumn('ta_about_us','about_id',$id);
				$data['title']='Sửa thông giới thiệu';
				$data['bcCurrent']='giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('about_content','Tên','required|trim');
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
					$data['list']=$this->Mgioithieu->getListFull('ta_about_us');
					$data['info']=$this->Mgioithieu->getRowByColumn('ta_about_us','about_id',$id);
					$data['title']='Sửa thông tin giới thiệu';
					$data['bcCurrent']='giới thiệu';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
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
		