<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mlienhe');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        //$this->bep_site->set_crumb($this->lang->line('backendpro_ql_khoahoc'),$this->module.'/admin');
	        //$this->load->library('form_validation');
	    }
	
	
	    function index()
	    {
	        $data['title']='Danh sách liên hệ';
	        $data['listContact']=$this->Mlienhe->getListContact();
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_lienhe_home";
	        $this->load->view($this->_container,$data);
	    }
	    
	    function delete($id=0)
	    {
	    	$this->Mlienhe->deleteContact($id);
	    	$this->index();
	    }
	    
		function view($id=0)
		{
	    	$data['title']='Liên hệ';
	        $data['lienhe']=$this->Mlienhe->getView($id);
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_lienhe_view";
	        $this->load->view($this->_container,$data);
	    }
	}
?>