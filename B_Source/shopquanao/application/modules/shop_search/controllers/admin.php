<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Kho');        
      
        // load the MKho model
        $this->load->model('MSearch');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_search'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['search']=$this->MSearch->getSearch('',0);
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_search_home";
        $this->load->view($this->_container,$data);
    }
  
 	/*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        // Setting variables
        $data['title'] = "Tìm kiem san pham";
        //$data['kho'] = $this->MKho->getKho();
        
        // we are pulling a header word from language file
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'search'     => $this->input->post('search',TRUE),
        	'type_search'=> $this->input->post('type_search',TRUE)            
        );
        return $data;
    }
    
    function search()
    {
    	   	
    	$search= $this->input->post('search',TRUE);    	
    	$type_search= $this->input->post('type_search',TRUE);
    	    	
    	$data['search']=$this->MSearch->getSearch($search,$type_search);
    	
        $data['title'] = "Tim Kiem";
        // Set breadcrumb
        $this->bep_site->set_crumb($this->lang->line('kago_search')." ".$this->lang->line('kago_search'),$this->module.'/admin/search');
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_search_home";
        
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
           
               /* flashMsg('success','Kho được tạo');
                redirect($this->module.'/admin/index','refresh');*/
            
        
       
   	
    }



}// end of class
?>