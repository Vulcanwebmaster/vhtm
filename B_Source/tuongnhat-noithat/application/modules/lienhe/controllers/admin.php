<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//Load model
			$this->load->model('Mlienhe');
			$this->load->library('pagination');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhatp2/ckeditor/", 'outPut' => true)); 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('contact_name', 'Tên liên hệ', 'required');
			$this->form_validation->set_rules('contact_email', 'Địa chỉ email', 'required');
			$this->form_validation->set_rules('category_id', 'Tên danh mục', 'required');
			$this->form_validation->set_rules('contact_subject', 'Tiêu đề', 'required');
			$this->form_validation->set_rules('contact_message', 'Nội dung', 'required');
			$this->form_validation->set_message('required','%s không được để trống');
		}
		
		function index()
		{
			$config['base_url'] = base_url().'lienhe/admin/index';
			$config['total_rows'] = $this->Mlienhe->count();
			$config['uri_segment'] = 4;
			$config['per_page'] = 6; 
			$this->pagination->initialize($config); 
			$data['listpaging'] = $this->Mlienhe->getList($config['per_page'],$this->uri->segment(4));
			
			$listCategory = array();
			foreach($data['listpaging'] as $contact)
			{
				if($contact->category_id == 0) $listCategory[] = "";
				else $listCategory[] = $this->Mlienhe->getRowById('tn_categories','category_id',$contact->category_id);
			}
			$data['listCategory'] = $listCategory;
			$data['page'] = 'admin_lienhe_list';
			$data['title'] = 'Liên hệ';
			$data['bcCurrent'] = 'Danh sách liên hệ';
			$data['module'] = $this->module;
			$this->load->view('admin/container',$data);	
		}
		
		function edit($product_id)
		{
			$data['query'] = $this->Mlienhe->getRowById('tn_contacts','contact_id',$this->uri->segment(4));
			if($data['query']->category_id == 0) $category = "";
			else $category = $this->Mlienhe->getRowById('tn_categories','category_id',$data['query']->category_id);
					
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					if($this->Mlienhe->edit($this->uri->segment(4))){
						$this->session->set_userdata('session','Cập nhật thành công');
					}
					else{
						$this->session->set_userdata('session','Cập nhật không thành công');
					}
					redirect(base_url().'lienhe/admin', 'refresh');
				}
				else{
					$data['config'] = $this->setupCKEditor('97%','90px');
					$data['category'] = $category;
					$data['page'] = 'admin_lienhe_edit';
					$data['bcCurrent'] = 'Thông tin liên hệ';
					$data['title'] = 'Thông tin liên hệ';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$data['config'] = $this->setupCKEditor('97%','90px');
				$data['category'] = $category;
				$data['page'] = 'admin_lienhe_edit';
				$data['bcCurrent'] = 'Thông tin liên hệ';
				$data['title'] = 'Thông tin liên hệ';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}

		function del($contact_id)
		{
			if($this->Mlienhe->del($this->uri->segment(4))){
				$this->session->set_userdata('session','Xóa thành công');
			}
			else{
				$this->session->set_userdata('session','Xóa không thành công');
			}
			redirect(base_url().'lienhe/admin', 'refresh');
		}
	}
?>