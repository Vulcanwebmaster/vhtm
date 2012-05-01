<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * modules/category/controllers/admin.php
 * Kaimonokago shopping cart on CodeIgniter
 * Author   Shin Okada
 * Contact okada.shin@gmail.com
 * version: 1.1.4 beta
 *
 *
 */

class Admin extends Shop_Admin_Controller 
{
    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        $this->load->model('MContact');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_contact_message';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_contact_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('message_id','name','company');
        $orderby = array('message_id');
        $data['contact'] = $this->MIStockGold->getAll("contact_us",$fields,$orderby);
        return $data;
    }

	function _fields()
    {
    }

    function view($id=0)
    {
       	$data['page'] = "admin/admin_contact_view";
        $data['module'] = $this->module;
        $data['contact'] = $this->MContact->getMessageByID($id);
        $this->load->view($this->_container,$data);
    }
    
    function delete($id=0)
    {
    	$this->MIStockGold->deleteitem("is_contact_us",$id);
        redirect(base_url().'index.php/is_contact_message/admin','refresh');
    }
}//end class
?>
