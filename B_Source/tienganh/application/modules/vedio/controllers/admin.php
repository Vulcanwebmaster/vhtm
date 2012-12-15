<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mvedio');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Video';
			$data['bcCurrent']='Video';
			$data['list']=$this->Mvedio->getListFull('ta_vedio');
			//$data['list_anh']=$this->Mvedio->getListFull('ta_vedio');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'vedio_title'=>$this->input->post('vedio_title'),
						'link_vedio'=>$this->input->post('link_vedio'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('vedio_title'))
			{
				$data['list']=$this->Mvedio->getListFull('ta_vedio');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm vedio';
				$data['bcCurrent']='Vedio';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('vedio_title','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio->insertNewRow('ta_vedio',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio->getListFull('ta_vedio');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm vedio';
					$data['bcCurrent']='Vedio';
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
			if (!$this->input->post('vedio_title'))
			{
				$data['list']=$this->Mvedio->getListFull('ta_vedio');
				$data['info']=$this->Mvedio->getRowByColumn('ta_vedio','vedio_id',$id);
				$data['title']='Sửa vedio';
				$data['bcCurrent']='vedio';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('vedio_title','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio->updateRowByColumn('ta_vedio','vedio_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio->getListFull('ta_vedio');
					$data['info']=$this->Mvedio->getRowByColumn('ta_vedio','vedio_id',$id);
					$data['title']='Sửa vedio';
					$data['bcCurrent']='Vedio';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mvedio->deleteRowByColumn('ta_vedio','vedio_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
