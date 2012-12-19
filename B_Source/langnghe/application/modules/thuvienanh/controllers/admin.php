<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mthuvienanh');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$config['base_url']=base_url().'thuvienanh/admin/page/';
			$config['per_page']=2;
			$config['total_rows']=count($this->Mthuvienanh->getListFull('ln_thuvienanh'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Hình ảnh';
			$data['bcCurrent']='hình ảnh';
			$data['list']=$this->Mthuvienanh->getListOffset('ln_thuvienanh',2,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('file'=>$this->input->post('file'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('file'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm thư viện ảnh';
				$data['bcCurrent']='Thư viện ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('file','Ảnh','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mthuvienanh->insertNewRow('ln_thuvienanh',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm thư viện ảnh';
					$data['bcCurrent']='Thư viện ảnh';
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
			if (!$this->input->post('file'))
			{
				$data['info']=$this->Mthuvienanh->getRowByColumn('ln_thuvienanh','id',$id);
				$data['title']='Sửa thư viện ảnh';
				$data['bcCurrent']='Thư viện ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('file','Ảnh','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mthuvienanh->updateRowByColumn('ln_thuvienanh','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mthuvienanh->getRowByColumn('ln_thuvienanh','id',$id);
					$data['title']='Sửa thư viện ảnh';
					$data['bcCurrent']='Thư viện ảnh';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mthuvienanh->deleteRowByColumn('ln_thuvienanh','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
