<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();
	        // Check for access permission
	        //check('Hoithao');        
	        $this->load->model('Mdangky');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        //$this->bep_site->set_crumb($this->lang->line('backendpro_ql_hoithao'),$this->module.'/admin');
	    }
	
	
	    function index()
	    {
	        //$data = $this->common_home();
	        $data['title']='Danh sách đăng ký';
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_dangky_home";
	        $data['listDangKy']=$this->Mdangky->getListDangKy();
	        $this->load->view($this->_container,$data);
	    }
	    
		function delete($id=0)
		{
			$this->Mdangky->delete($id);
			$this->index();
		}
	}
?>