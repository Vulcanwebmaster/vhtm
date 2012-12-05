<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdanhmuc');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Danh mục';
			$data['bcCurrent']='Danh mục';
			$data['list']=$this->Mdanhmuc->getListFull('ln_category');
			$data['module']=$this->module;
			$data['page']='admin_list_category';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('category_name'=>$this->input->post('category_name'),
						'is_active'=>$this->input->post('is_active'),
						'alias'=>$this->getAliasByName($this->input->post('category_name')));/*getAliasByName Lấy từ Controller mà nó kế thừa*/
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('category_name'))
			{
				$data['list']=$this->Mdanhmuc->getListByColumn('ln_category','category_name','0');
				$data['title']='Thêm danh mục';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_insert_category';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('category_name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->insertNewRow('ln_category',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdanhmuc->getListByColumn('ln_category','category_name','>0');
					$data['title']='Thêm danh mục';
					$data['bcCurrent']='Danh mục';
					$data['module']=$this->module;
					$data['page']='admin_insert_category';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			if (!$this->input->post('category_name'))
			{
				$data['list']=$this->Mdanhmuc->getListByColumn('ln_category','category_name','0');
				$data['info']=$this->Mdanhmuc->getRowByColumn('ln_category','category_id',$id);
				$data['title']='Sửa danh mục';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_edit_category';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('category_name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->updateRowByColumn('ln_category','category_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdanhmuc->getListByColumn('ln_category','category_name','>0');
					$data['info']=$this->Mdanhmuc->getRowByColumn('ln_category','category_id',$id);
					$data['title']='Sửa danh mục';
					$data['bcCurrent']='Danh mục';
					$data['module']=$this->module;
					$data['page']='admin_edit_category';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mdanhmuc->deleteRowByColumn('ln_category','category_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
