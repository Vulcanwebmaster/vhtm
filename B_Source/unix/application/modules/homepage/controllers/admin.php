<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();       
        $this->load->model('MHomepage');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_homepage'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_homepage_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý trang chủ";
        $data['homepage'] = $this->MHomepage->getHomePage();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields($muc_id)
    {
    	$data = array(
            'muc_id'      => $muc_id,
            'dulieu'      => $this->input->post('dulieu_'.$muc_id,TRUE)   
        );
        return $data;
    }
    
	function update()
    {
        $data['homepage'] = $this->MHomepage->getIDs();
        $x = $data['homepage'];
        foreach($x as $key => $list )
        {
         	$data = $this->_fields($list['muc_id']);
        	$this->MHomepage->updateHomePage($data);
        }
        $this->index();
        flashMsg('success','Cập nhật thành công!!!');
    }
}// end of class
?>