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
        $this->load->model('MISPages');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_pages';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_pages_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('id','title','content','date');
        $orderby = array('id');
        $data['pages'] = $this->MIStockGold->getAll("pages",$fields,$orderby);
        return $data;
    }

    /*
    * this is used for ajax function
    */

    /*function Ajaxgetupdate()
    {
        $data = $this->common_home();
        $this->load->view('admin/admin_home_cont',$data);
    }*/

	function _fields()
    {
        $data = array(
        'title'       => db_clean($_POST['title']),
        'content'     => $this->input->post('content')
        );
        return $data;
    }

    function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        if ($this->input->post('title'))
        {
            $data = $this-> _fields();
            $this->MISPages->addPages($data);
            flashMsg('success',"Add sucessfully");
            redirect(base_url().'index.php/is_pages/admin','refresh');
        }
        else
        {
            $data['page'] = "admin/admin_pages_create";
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }

    function edit($id=0)
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        if ($this->input->post('title'))
        {
            $data = $this->_fields();
            $this->MISPages->updatePagesByID($id,$data);
            flashMsg('success',"Update sucessfully");
            redirect(base_url().'index.php/is_pages/admin','refresh');
        }
        else
        {
        	$data['page'] = "admin/admin_pages_edit";
            $data['module'] = $this->module;
        	$data['pages'] = $this->MISPages->getPagesByID($id);
            $this->load->view($this->_container,$data);
        }
    }

    function delete($id)
    {
        $this->MIStockGold->deleteitem("is_pages",$id);
        redirect(base_url().'index.php/is_page/admin','refresh');
    }
}//end class
?>
