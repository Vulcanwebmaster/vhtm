<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdichvu');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/niwcom/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Dịch vụ';
			$data['bcCurrent']='Dịch vụ';
			$data['list']=$this->Mdichvu->getListFull('dichvu');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('tieude'=>$this->input->post('tieude'),
						'tieudee'=>$this->input->post('tieudee'),
						'noidung'=>$this->input->post('noidung'),
						'noidunge'=>$this->input->post('noidunge'),
						'alias'=>$this->getAliasByName($this->input->post('tieude')),
						);
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tieude'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm Dịch vụ';
				$data['bcCurrent']='Dịch vụ';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdichvu->insertNewRow('dichvu',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm Dịch vụ';
					$data['bcCurrent']='Dịch vụ';
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
			if (!$this->input->post('tieude'))
			{
				$data['info']=$this->Mdichvu->getRowByColumn('dichvu','id',$id);
				$data['title']='Sửa Dịch vụ';
				$data['bcCurrent']='Dịch vụ';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdichvu->updateRowByColumn('dichvu','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mdichvu->getRowByColumn('dichvu','id',$id);
					$data['title']='Sửa Dịch vụ';
					$data['bcCurrent']='Dịch vụ';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mdichvu->deleteRowByColumn('dichvu','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>