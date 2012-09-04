<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Hoithao');        
        $this->load->model('MContact');
		$this->load->library('form_validation');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_contact'),$this->module.'/admin');
    }
	
	function index()
	{
		$data['title']="Quản lý địa chỉ liên hệ";
		$data['module'] = $this->module;
		$data['header'] = $this->lang->line('backendpro_access_control');
		$data['page'] = $this->config->item('backendpro_template_admin')."view";
		$data['contact'] = $this->MContact->getListContact();	    
	    flashMsg('success','Tải thông tin liên hệ thành công');	
		$this->load->view($this->_container,$data);
	}
	
	function update($id)
	{
		$this->form_validation->set_rules('ten','"Tên"','required');
		$this->form_validation->set_rules('diachi','"Địa chỉ"','required');
		$this->form_validation->set_rules('dienthoai','"Điện thoại"','required');
		$this->form_validation->set_rules('email','"Email"','required');
		$this->form_validation->set_rules('website','"Website"','required');
		
		if($this->form_validation->run())
		{
			$this->MContact->updateContact($id);
			$data['title']="Quản lý địa chỉ liên hệ";
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			$data['page'] = $this->config->item('backendpro_template_admin')."view";
			$data['contact'] = $this->MContact->getListContact();	    
	   	 	flashMsg('success','Thông tin liên hệ được cập nhật thành công');	
			$this->load->view($this->_container,$data);
		}
		else 
		{
			$data['title']="Quản lý địa chỉ liên hệ";
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			$data['page'] = $this->config->item('backendpro_template_admin')."view";
			$data['contact'] = $this->MContact->getListContact();	    
	   	 	flashMsg('error','Bạn phải nhập đầy đủ thông tin');	
			$this->load->view($this->_container,$data);
		}
	}
}
?>