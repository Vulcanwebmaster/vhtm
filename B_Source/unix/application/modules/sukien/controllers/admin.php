<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    	private $module;

	    function __construct()
	    {
	        parent::__construct();
	        // Check for access permission
	        //check('Hoithao');        
	        $this->load->model('MSukien');
			$this->load->library('form_validation');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_sukien'),$this->module.'/admin');
	    }
	
	    function common_home()
	    {
	        $data['title'] = "Quản lý sự kiện";
	        $data['sukien'] = $this->MSukien->getSuKien();
	        $data['header'] = $this->lang->line('backendpro_access_control');
	        $data['module'] = $this->module;
	        return $data;
	    }
		
	    function index()
	    {
	        $data = $this->common_home();
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sukien_home";
			flashMsg('success','Tải thông tin các sự kiện thành công.');
	        $this->load->view($this->_container,$data);
	    }
		
		function update($id)
		{
			$this->bep_assets->load_asset_group('TINYMCE');
			  
	        $this->form_validation->set_rules('tieude','"Tiêu đề"','required');
			$this->form_validation->set_rules('mota','"Mô tả"','required');
			$this->form_validation->set_rules('thoigian','"Thời gian"','required');
			$this->form_validation->set_rules('diadiem','"Địa điểm"','required');
			$this->form_validation->set_message('required','Mục %s không được để trống');
	        if ($this->form_validation->run())
	        {		
	             $this->MSukien->updateSuKien($id);
	             redirect($this->module.'/admin','refresh');
	             flashMsg('success','Sự kiện đã được cập nhật');
			}
			else 
			{
				$this->bep_assets->load_asset_group('TINYMCE');
				$data['title']="Cập nhật sự kiện";
				$data['module'] = $this->module;
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_sukien_home";
				$data['hoithao'] = $this->MSukien->getSuKien();
		        flashMsg('error','Mời bạn nhập đầy đủ tiêu đề,nội dung, thời gian, địa điểm của sự kiện');
		        $this->load->view($this->_container,$data);
			}	  	      
		}
		
		function site($id)
		{
			$this->bep_assets->load_asset_group('TINYMCE');
			$data['title'] = "Sửa sự kiện";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sukien_edit";
            $data['sukien'] = $this->MSukien->getInfo($id);
            
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
			$this->bep_site->set_crumb($this->lang->line('kago_edit_sukien'));
            flashMsg('noctice','Mời bạn nhập các thông tin về sự kiện');
            $this->load->view($this->_container,$data);
		}
	
		function create()
	    {
	    	$this->bep_assets->load_asset_group('TINYMCE');
			$this->form_validation->set_rules('tieude','"Tiêu đề"','required');
			$this->form_validation->set_rules('mota','"Mô tả"','required');
			$this->form_validation->set_rules('thoigian','"Thời gian"','required');
			$this->form_validation->set_rules('diadiem','"Địa điểm"','required');
			$this->form_validation->set_message('required','Mục %s không được để trống');
	        if ($this->form_validation->run())
	        {
	           	$this->MSukien->addSuKien();
	            flashMsg('success','Tạo sự kiện thành công');
	            redirect($this->module.'/admin/index','refresh');
	        }
	        else
	        {
	            $data['title'] = "Tạo sự kiện mới";
	            
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sukien_create";
				$this->bep_site->set_crumb($this->lang->line('kago_creat_sukien'));
	            $data['cancel_link']= $this->module."/admin/index/";
	            flashMsg('notice','Mời bạn nhập đầy đủ tiêu đề,nội dung, thời gian, địa điểm của sự kiện');
	            $data['module'] = $this->module;
	            $this->load->view($this->_container,$data);
	        }
	    }
	  
	    function delete($id)
	    {
	        $this->MSukien->deleteSuKien($id);
	        flashMsg('success','Sự kiện đã được xóa thành công.');
	        redirect($this->module.'/admin/index','refresh');
	    }
	}
?>