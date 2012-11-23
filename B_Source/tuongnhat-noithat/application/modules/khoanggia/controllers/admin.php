<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mkhoanggia');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Khoảng giá';
			$data['bcCurrent']='Khoảng giá';
			$data['list']=$this->Mkhoanggia->getListFull('tn_price');
			$data['module']=$this->module;
			$data['page']='admin_list_price';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('category_name_v' => $this->input->post('category_name_v'),
						'category_name_e' => $this->input->post('category_name_e'),
						'alias' => $this->getAliasByName($this->input->post('category_name_v')),/*getAliasByName Lấy từ Controller mà nó kế thừa*/
						'category_parent_id' => $this->input->post('category_parent_id'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('category_name_v'))
			{
				$data['title']='Thêm danh mục';
				$data['bcCurrent']='Khoảng giá';
				$data['module']=$this->module;
				$data['page']='admin_insert_price';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('price_min','Giá thấp nhất','required|trim');
				$this->form_validation->set_rules('price_min','Giá cao nhất','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mkhoanggia->insertNewRow('tn_price',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mkhoanggia->getListByColumn('tn_price','category_parent_id','>0');
					$data['title']='Thêm danh mục';
					$data['bcCurrent']='Khoảng giá';
					$data['module']=$this->module;
					$data['page']='admin_insert_price';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			if (!$this->input->post('category_name_v'))
			{
				$data['list']=$this->Mkhoanggia->getListByColumn('tn_price','category_parent_id','0');
				$data['info']=$this->Mkhoanggia->getRowByColumn('tn_price','price_id',$id);
				$data['title']='Sửa khoảng giá';
				$data['bcCurrent']='Khoảng giá';
				$data['module']=$this->module;
				$data['page']='admin_edit_price';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('category_name_v','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mkhoanggia->updateRowByColumn('tn_price','price_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mkhoanggia->getListByColumn('tn_price','category_parent_id','>0');
					$data['info']=$this->Mkhoanggia->getRowByColumn('tn_price','price_id',$id);
					$data['title']='Sửa khoảng giá';
					$data['bcCurrent']='Khoảng giá';
					$data['module']=$this->module;
					$data['page']='admin_edit_price';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mkhoanggia->deleteRowByColumn('tn_price','price_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
