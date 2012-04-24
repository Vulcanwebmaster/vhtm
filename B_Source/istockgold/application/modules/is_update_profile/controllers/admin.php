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
        $this->load->model('MProfile');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_update_profile';
        $this->load->helper('auth/userlib');
        $this->load->library('auth/userlib');//lang auth/userlib is loaded here
        $this->load->config('auth/userlib');
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_profile_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('admin_id','email','password','fullname','address','city','province','zip','phone','country','currency_id','currency_account');
        $orderby = array('admin_id');
        $data['profiles'] = $this->MProfile->getAdmin();
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
        'email'        => db_clean($_POST['mail']),
        'password'    => $this->userlib->encode_password($_POST['password0'])
        );
        return $data;
    }

    function edit()
    {
        if ($this->input->post('mail'))
        {
            $data = $this-> _fields();
            $this->MProfile->update($data);
            //flashMsg('success','Change account sucessfully');
            redirect(base_url().'index.php/is_update_profile/admin');
        }
    }
}
?>
