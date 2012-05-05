<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * modules/is_online_support/controllers/admin.php
 * Kaimonokago shopping cart on CodeIgniter
 * Author:  An
 *
 */

class Admin extends Shop_Admin_Controller 
{
    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        $this->load->model('MOnline_support');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_online_support';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_online_support_home";
        $this->load->view($this->_container,$data);
    }
    
	function edit_online_support()
    {
            $data = $this-> _fields();
            $this->MOnline_support->update($data);
            redirect(base_url().'index.php/is_online_support/admin');
    }
    
    function common_home()
    {
        $fields = array('online_support_id','yahoo_nick1','yahoo_nick2','name','phone');
        $orderby = array('online_support_id');
        $data['online_support'] = $this->MIStockGold->getAll("online_support",$fields, $orderby);
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
    	$data = array(
        'yahoo_nick1'        => db_clean($_POST['online1']), 
    	'yahoo_nick2'        => db_clean($_POST['online2']),   
    	'name'     			 => db_clean($_POST['name']),
        'phone'     		 => db_clean($_POST['phone'])
    	
        );
        return $data;
    
    }

}//end class
?>
