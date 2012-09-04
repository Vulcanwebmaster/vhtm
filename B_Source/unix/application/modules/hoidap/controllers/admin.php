<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mhoidap');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_hoidap'),$this->module.'/admin');
	        //$this->load->library('form_validation');
	    }
	
	
	    function index()
	    {
	        $data['title']='Danh sách câu hỏi';
	        $data['listContact']=$this->Mhoidap->getListContact();
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoidap_home";
			flashMsg('success','Tải thông tin các câu hỏi thành công');
	        $this->load->view($this->_container,$data);
	    }
	    
	    function delete($id=0)
	    {
	    	$this->Mhoidap->delete($id);
	    	$this->index();
	    }
	    
		function view($id=0)
		{
			$this->bep_assets->load_asset_group('TINYMCE');
	    	$data['title']='Hỏi đáp';
			$data['module'] = $this->module;
	        $data['hoidap']=$this->Mhoidap->getView($id);
			$data['header'] = $this->lang->line('backendpro_access_control');
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoidap_view";
			$this->bep_site->set_crumb($this->lang->line('kogo_edit_hoidap'));
			flashMsg('succes','Hiển thị câu hỏi số '.$id.' thành công');
	        $this->load->view($this->_container,$data);
	    }
		
		function update($id)
		{
			
			$this->load->Mhoidap->update($id);
			$this->index();
			
		}
	}
?>