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
    	$this->bep_assets->load_asset_group('TINYMCE');
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_homepage_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý trang chủ";
        $temp = $this->MHomepage->getHomePage();
        foreach ($temp as $key => $list){
        	if ($list['muc_id'] == 4 || $list['muc_id'] == 5){
        		$tmp = explode(",", $list['dulieu']);
        		$final = "";
        		foreach($tmp as $str)
        		{
        			$final = $final."<p><img src=\"".base_url().$str."\" alt=\"\" /></p>" ;
        		}
        		$list['dulieu'] = $final;
        	}
        }
        var_dump($temp);
        		die();
        $data['homepage'] = $temp;
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
    	$this->bep_assets->load_asset_group('TINYMCE');
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