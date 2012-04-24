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
        $this->load->model('msite_settings');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_set_settings';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        //$data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_site_settings_home";
        $this->load->view($this->_container,$data);
    }
    
	function edit_settings()
    {
            $data = $this-> _fields_settings();
            $this->msite_settings->update($data);
            redirect(base_url().'index.php/is_site_settings/admin');
        
    }

    function _fields_settings()
    {
    	$data = array(
        'site_name'        => db_clean($_POST['SITE_NAME']),
        'site_url'   	   => db_clean($_POST['SITE_URL']),
    	'site_secure'      => db_clean($_POST['SITE_URL_SECURE']),
        'friendly_url'     => db_clean($_POST['FRIENDLY_URL']),
    	'temporary'        => db_clean($_POST['temporary_close'])
        );
        return $data;
    
    }

}//end class
?>
