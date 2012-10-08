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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Giới thiệu';
			$data['bcCurrent']='Giới thiệu';
			$data['list']=$this->Mgioithieu->getListFull('gioithieu');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('tieude_v'=>$this->input->post('tieude_v'),
						'tieude_e'=>$this->input->post('tieude_e'),
						'noidung_v'=>$this->input->post('noidung_v'),
						'noidung_e'=>$this->input->post('noidung_e'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tieude_v'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm giới thiệu';
				$data['bcCurrent']='Giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgioithieu->insertNewRow('gioithieu',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm giới thiệu';
					$data['bcCurrent']='Giới thiệu';
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
			if (!$this->input->post('tieude_v'))
			{
				$data['info']=$this->Mgioithieu->getRowByColumn('gioithieu','id',$id);
				$data['title']='Sửa giới thiệu';
				$data['bcCurrent']='Giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgioithieu->updateRowByColumn('gioithieu','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mgioithieu->getRowByColumn('gioithieu','id',$id);
					$data['title']='Sửa giới thiệu';
					$data['bcCurrent']='Giới thiệu';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mgioithieu->deleteRowByColumn('gioithieu','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>