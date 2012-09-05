<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        $this->load->model('MDangky');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_dangky'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_dangky_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý danh sách đăng ký dự thi";
        $data['dangky'] = $this->MDangky->getDangKy();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }
	
	function delete($id)
	{
		$this->MDangky->delete($id);
		$this->index();
	}
    
}
?>