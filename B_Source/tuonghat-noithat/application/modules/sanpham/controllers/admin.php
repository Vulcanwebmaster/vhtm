<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//Load model
			$this->load->model('Msanpham');
			$this->load->library('pagination');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('product_name', 'Tên sản phẩm', 'required');
			$this->form_validation->set_rules('product_price', 'Giá sản phẩm', 'required');
			$this->form_validation->set_rules('product_image', 'Ảnh đại diện', 'required');
			$this->form_validation->set_message('required','%s không được để trống');
		}
		
		function index()
		{
			$config['base_url'] = base_url().'sanpham/admin/index';
			$config['total_rows'] = $this->Msanpham->countSanpham();
			$config['per_page'] = 6; 
			$this->pagination->initialize($config); 
			$data['listpaging']=$this->Msanpham->getListSanpham($config['per_page'],$this->uri->segment(4));
			$data['paging'] = $this->pagination->create_links();
			
			$listCategory = array();
			foreach($data['listpaging'] as $row)
			{
				if($row->category_id !=0 )
					$listCategory[] = $this->Msanpham->getCategoryNameById($row->category_id);
				else $listCategory[] = "";
			}
			$data['listCategory'] = $listCategory;
			$data['page'] = 'admin_sanpham_list';
			$data['title'] = 'Quản lý sản phẩm';
			$data['bcCurrent'] = 'Quản lý sản phẩm';
			$data['module'] = $this->module;
			
			$this->load->view('admin/container',$data);		
		}
		
		function edit($product_id)
		{
			$data['listCategory'] = $this->Msanpham->getListCategory();
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					if($this->Msanpham->editSanpham($this->uri->segment(4))){
						$this->session->set_userdata('session','Cập nhật thành công');
					}
					else{
						$this->session->set_userdata('session','Cập nhật không thành công');
					}
					redirect(base_url().'sanpham/admin', 'refresh');
				}
				else{
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhatp2/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor('97%','90px');
					//=============================================
					$data['query'] = $this->Msanpham->getSanphamById($this->uri->segment(4));
					$data['page'] = 'admin_sanpham_edit';
					$data['bcCurrent'] = 'Cập nhật thông tin sản phẩm';
					$data['title'] = 'Cập nhật thông tin sản phẩm';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhatp2/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor('97%','90px');
				//=============================================
				$data['query'] = $this->Msanpham->getSanphamById($this->uri->segment(4));
				$data['page'] = 'admin_sanpham_edit';
				$data['bcCurrent'] = 'Cập nhật thông tin sản phẩm';
				$data['title'] = 'Cập nhật thông tin sản phẩm';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}
		
		
		function insert()
		{
			$data['listCategory'] = $this->Msanpham->getListCategory();
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					if($this->Msanpham->insertSanpham())
						$this->session->set_userdata('session','Thêm mới thành công');
					else $this->session->set_userdata('session','Thêm mới không thành công');
					redirect(base_url().'sanpham/admin', 'refresh');
				}
				else {
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhatp2/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor('97%','90px');
					//=============================================
					$data['page'] = 'admin_sanpham_insert';
					$data['bcCurrent'] = 'Thêm sản phẩm';
					$data['title'] = 'Thêm sản phẩm';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhatp2/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor('97%','90px');
				//=============================================
				$data['page'] = 'admin_sanpham_insert';
				$data['bcCurrent'] = 'Thêm sản phẩm';
				$data['title'] = 'Thêm sản phẩm';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}
		
		function del($product_id)
		{
			if($this->Msanpham->delSanpham($this->uri->segment(4))){
				$this->session->set_userdata('session','Xóa thành công');
			}
			else{
				$this->session->set_userdata('session','Xóa không thành công');
			}
			redirect(base_url().'sanpham/admin', 'refresh');
		}
	}
?>	
