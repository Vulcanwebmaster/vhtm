<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mtuvansanpham');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Tư vấn sản phẩm';
			$data['bcCurrent']='sản phẩm';
			$data['list']=$this->Mtuvansanpham->getListFull('tuvansanpham');
			$data['module']=$this->module;
			$data['page']='admin_list_tuvansanpham';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'parent_id'=>$this->input->post('parent_id'),
						'title'=>$this->input->post('title'),
						'content'=>$this->input->post('content'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('title'))
			{
				$data['title']='Thêm tư vấn sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_insert_tuvansanpham';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtuvansanpham->insertNewRow('tuvansanpham',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['title']='Thêm tư vấn sản phẩm';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_insert_tuvansanpham';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('title'))
			{
				$data['info']=$this->Mtuvansanpham->getRowByColumn('tuvansanpham','id',$id);
				$data['title']='Sửa tư vấn sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_edit_tuvansanpham';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtuvansanpham->updateRowByColumn('tuvansanpham','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mtuvansanpham->getRowByColumn('tuvansanpham','id',$id);
					$data['title']='Sửa tư vấn sản phẩm';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_edit_tuvansanpham';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mtuvansanpham->deleteRowByColumn('tuvansanpham','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>