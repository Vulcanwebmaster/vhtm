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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true)); 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('contact_name', 'Tên liên hệ', 'required');
			$this->form_validation->set_rules('contact_email', 'Địa chỉ email', 'required');
			
			$this->form_validation->set_rules('contact_subject', 'Tiêu đề', 'required');
			$this->form_validation->set_rules('contact_message', 'Nội dung', 'required');
			$this->form_validation->set_message('required','%s không được để trống');
		}
		
		
			function index()
		{
			
			$data['listpaging'] = $this->Mlienhe->getList();
		
			$data['page'] = 'admin_lienhe_list';
			$data['title'] = 'Liên hệ';
			$data['bcCurrent'] = 'Danh sách liên hệ';
			$data['module'] = $this->module;
			$this->load->view('admin/container',$data);	
		}
		
		

		function del($id)
		{
			if($this->Mlienhe->deleteContact($this->uri->segment(4))){
				$this->session->set_userdata('session','Xóa thành công');
			}
			else{
				$this->session->set_userdata('session','Xóa không thành công');
			}
			redirect(base_url().'lienhe/admin', 'refresh');
		}
	}
?>