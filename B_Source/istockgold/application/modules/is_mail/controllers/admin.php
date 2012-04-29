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
        $this->load->model('MMail');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_mail';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_mail_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('id','title','content','date');
        $orderby = array('date');
        $data['news'] = $this->MIStockGold->getAll("mail",$fields,$orderby);
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
        if ($this->input->post('title'))
        {
            $data = $this-> _fields();
            $this->MMail->addMail($data);
            flashMsg('success',"Add sucessfully");
            redirect(base_url().'index.php/is_mail/admin','refresh');
        }
        else
        {
            $data['page'] = "admin/admin_mail_create";
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }

    function edit($id=0)
    {
        if ($this->input->post('title'))
        {
            $data = $this->_fields();
            $this->MMail->updateMailByID($id,$data);
            flashMsg('success',"Update sucessfully");
            redirect(base_url().'index.php/is_mail/admin','refresh');
        }
        else
        {
        	$data['page'] = "admin/admin_news_edit";
            $data['module'] = $this->module;
        	$data['news'] = $this->MMail->getNewsByID($id);
            $this->load->view($this->_container,$data);
        }
    }

    function delete($id)
    {
        $this->MIStockGold->deleteitem("is_mail",$id);
        redirect(base_url().'index.php/is_mail/admin','refresh');
    }
}//end class
?>
