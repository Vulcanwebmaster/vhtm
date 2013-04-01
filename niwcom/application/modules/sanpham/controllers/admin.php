<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/niwcom/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$data['list']=$this->Msanpham->getListFull('sanpham');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('tensp'=>$this->input->post('tensp'),
						'link'=>$this->input->post('link'),
						'hinhanh'=>$this->input->post('hinhanh'),
						'alias'=>$this->getAliasByName($this->input->post('tensp')),
						);
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tensp'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm Sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tensp','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->insertNewRow('sanpham',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm Sản phẩm';
					$data['bcCurrent']='Sản phẩm';
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
			if (!$this->input->post('tensp'))
			{
				$data['info']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
				$data['title']='Sửa Sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tensp','Tên sản phẩm','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->updateRowByColumn('sanpham','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
					$data['title']='Sửa Sản phẩm';
					$data['bcCurrent']='Sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('sanpham','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>