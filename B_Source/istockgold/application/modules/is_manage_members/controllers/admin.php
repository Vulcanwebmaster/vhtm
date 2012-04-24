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
        $this->load->model('mmanage_member');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_manage_members';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_manage_members_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('user_id','user_name','full_name','ip','country','email');
        $orderby = array('user_id');
        $data['users'] = $this->MIStockGold->getAll('user',$fields, $orderby);
        return $data;
    }

    /*
    * this is used for ajax function
    */

    function Ajaxgetupdate()
    {
        $data = $this->common_home();
        $this->load->view('admin/admin_home_cont',$data);
    }

    function _fields()
    {
        $data = array(
        'name'        => db_clean($_POST['name']),
        'metadesc'    => db_clean($_POST['metadesc']),
        'metakeyword' => db_clean($_POST['metakeyword']),
        'shortdesc'   => db_clean($_POST['shortdesc']),
        'longdesc'    => $this->input->post('longdesc'),
        'status'      => db_clean($_POST['status'],8),
        'parentid'    => id_clean($_POST['parentid']),
        'lang_id'     => id_clean($_POST['lang_id']),
        'order'       => id_clean($_POST['order'],10),
        'table_id'    => id_clean($_POST['table_id'])
        );
        // $this->MKaimonokago->addItem($this->module, $data);
        return $data;
    }

    function delete($id)
    {
        $this->MIStockGold->deleteitem('is_user',$id);
        flashMsg('Success',"Delete successfully.");
        redirect('is_manage_members/admin/index','refresh');
    }    
}//end class
?>
