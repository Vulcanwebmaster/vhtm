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
			$data['title']='Hãng xe';
			$data['bcCurrent']='Danh mục';
			$data['list']=$this->Mdanhmuc->getListFull('xh_category');
			$data['module']=$this->module;
			$data['page']='admin_list_category';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('namev'=>$this->input->post('namev'),
						'alias'=>$this->getAliasByName($this->input->post('namev')),/*getAliasByName Lấy từ Controller mà nó kế thừa*/
						'parent_id'=>$this->input->post('parent_id'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Mdanhmuc->getListByColumn('xh_category','parent_id','0');
				$data['title']='Thêm hãng xe';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_insert_category';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->insertNewRow('xh_category',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdanhmuc->getListByColumn('xh_category','parent_id','>0');
					$data['title']='Thêm hãng xe';
					$data['bcCurrent']='Danh mục';
					$data['module']=$this->module;
					$data['page']='admin_insert_category';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Mdanhmuc->getListByColumn('xh_category','parent_id','0');
				$data['info']=$this->Mdanhmuc->getRowByColumn('xh_category','id',$id);
				$data['title']='Sửa hãng xe';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_edit_category';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->updateRowByColumn('xh_category','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdanhmuc->getListByColumn('xh_category','parent_id','>0');
					$data['info']=$this->Mdanhmuc->getRowByColumn('xh_category','id',$id);
					$data['title']='Sửa hãng xe';
					$data['bcCurrent']='Danh mục';
					$data['module']=$this->module;
					$data['page']='admin_edit_category';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			
			if ($this->Mdanhmuc->deleteRowByColumn('xh_category','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>