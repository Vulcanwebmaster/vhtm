<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Manh');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Hình ảnh';
			$data['bcCurrent']='Hình ảnh';
			$data['list']=$this->Manh->getListFull('ta_image');
			//$data['list_anh']=$this->Manh->getListFull('ta_image');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('image_category'=>$this->input->post('image_category'),
						'image_name'=>$this->input->post('image_name'),
						'image_album'=>$this->input->post('image_album'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('image_name'))
			{
				$data['list']=$this->Manh->getListFull('ta_image');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm hình ảnh';
				$data['bcCurrent']='Hình ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('image_name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Manh->insertNewRow('ta_image',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Manh->getListFull('ta_image');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm hình ảnh';
					$data['bcCurrent']='Hỉnh ảnh';
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
			if (!$this->input->post('image_name'))
			{
				$data['list']=$this->Manh->getListFull('ta_image');
				$data['info']=$this->Manh->getRowByColumn('ta_image','image_id',$id);
				$data['title']='Sửa hình ảnh';
				$data['bcCurrent']='hình ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('image_name','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Manh->updateRowByColumn('ta_image','image_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Manh->getListFull('ta_image');
					$data['info']=$this->Manh->getRowByColumn('ta_image','image_id',$id);
					$data['title']='Sửa hình ảnh';
					$data['bcCurrent']='Hình ảnh';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Manh->deleteRowByColumn('ta_image','image_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
