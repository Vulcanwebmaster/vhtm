<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Malbum');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']		=	'Album';
			$data['bcCurrent']	=	'Album';
			$data['list']		=	$this->Malbum->getListFull('ta_albums');
			$data['module']		=	$this->module;
			$data['page']		=	'admin_vlist';
			
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('category_id'	=>	$this->input->post('category_id'),
						'album_name'		=>	$this->input->post('album_name'),
						'album_avatar'		=>	$this->input->post('album_avatar'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('album_name'))
			{
				$data['config']		=	$this->setupCKEditor('97%','200px');
				$data['title']		=	'Thêm album';
				$data['bcCurrent']	=	'Album';
				$data['module']		=	$this->module;
				$data['page']		=	'admin_vinsert';
				
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('album_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Malbum->insertNewRow('ta_albums',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config']		=	$this->setupCKEditor('97%','200px');
					$data['title']		=	'Thêm album';
					$data['bcCurrent']	=	'Album';
					$data['module']		=	$this->module;
					$data['page']		=	'admin_vinsert';
					
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			if (!$this->input->post('album_name'))
			{
				$data['info']=$this->Malbum->getRowByColumn('ta_albums','album_id',$id);
				$data['title']='Sửa album';
				$data['bcCurrent']='album';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('album_name','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Malbum->updateRowByColumn('ta_albums','album_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Malbum->getListFull('ta_albums');
					$data['info']=$this->Malbum->getRowByColumn('ta_albums','album_id',$id);
					$data['title']='Sửa album';
					$data['bcCurrent']='Album';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Malbum->deleteRowByColumn('ta_albums','album_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
