<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//Load model
			$this->load->model('Mdanhmuc');
			$this->load->library('pagination');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('category_name', 'Tên danh mục', 'required');
			$this->form_validation->set_message('required','%s không được để trống');
		}
		
		function index()
		{
			$config['base_url'] = base_url().'danhmuc/admin/index';
			$config['uri_segment'] = 4;
			$config['total_rows'] = $this->Mdanhmuc->count();
			$config['per_page'] = 2; 
			$this->pagination->initialize($config); 
			$data['listpaging'] = $this->Mdanhmuc->getList($config['per_page'],$this->uri->segment(4));
			
			$listParent = array();
			foreach($data['listpaging'] as $row)
			{
				if($row->category_parent_id == 0)
					$listParent[] = "";
				else $listParent[] = $this->Mdanhmuc->getCategoryNameById($row->category_parent_id); 
			}
			
			$data['listParent'] = $listParent;
			$data['page'] = 'admin_danhmuc_list';
			$data['title'] = 'Quản lý danh mục';
			$data['bcCurrent'] = 'Quản lý danh mục';
			$data['module'] = $this->module;
			$this->load->view('admin/container',$data);		
		}
		
		function insert()
		{
			$data['listParent'] = $this->Mdanhmuc->getlistParent();
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					if($this->Mdanhmuc->insert())
						$this->session->set_userdata('session','Thêm mới thành công');
					else $this->session->set_userdata('session','Thêm mới không thành công');
					redirect(base_url().'danhmuc/admin', 'refresh');
				}
				else {
					$data['page'] = 'admin_danhmuc_insert';
					$data['bcCurrent'] = 'Thêm danh mục';
					$data['title'] = 'Thêm danh mục';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$data['page'] = 'admin_danhmuc_insert';
				$data['bcCurrent'] = 'Thêm danh mục';
				$data['title'] = 'Thêm danh mục';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}
		
		function edit($product_id)
		{
			$data['listParent'] = $this->Mdanhmuc->getlistParent();
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					if($this->Mdanhmuc->edit($this->uri->segment(4))){
						$this->session->set_userdata('session','Cập nhật thành công');
					}
					else{
						$this->session->set_userdata('session','Cập nhật không thành công');
					}
					redirect(base_url().'danhmuc/admin', 'refresh');
				}
				else{
					$data['query'] = $this->Mdanhmuc->getRowById('n_tn_categories','category_id',$this->uri->segment(4));
					$data['page'] = 'admin_danhmuc_edit';
					$data['bcCurrent'] = 'Cập nhật thông tin danh mục';
					$data['title'] = 'Cập nhật thông tin danh mục';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$data['query'] = $this->Mdanhmuc->getRowById('n_tn_categories','category_id',$this->uri->segment(4));
				$data['page'] = 'admin_danhmuc_edit';
				$data['bcCurrent'] = 'Cập nhật thông tin danh mục';
				$data['title'] = 'Cập nhật thông tin danh mục';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}

		function del($category_id)
		{
			if($this->Mdanhmuc->del($this->uri->segment(4))){
				$this->session->set_userdata('session','Xóa thành công');
			}
			else{
				$this->session->set_userdata('session','Xóa không thành công');
			}
			redirect(base_url().'danhmuc/admin', 'refresh');
		}
	}
?>