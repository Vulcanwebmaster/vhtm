<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 *
 * @package         cecilieokada.com
 * @author          Shin Okada
 * @copyright       Copyright (c) 2011
 * @license         
 * @link            http://www.okadadesign.no/blog
 * 
 */

// ---------------------------------------------------------------------------

/**
 * Public_Controller
 *
 * Extends the Site_Controller class so I can declare special Public controllers
 *
 * @package      
 * @subpackage     Controllers
 */
class Public_Controller extends NIW_Controller
{
    public $lang_id='';
    public $language='';
    public $mainmodule='';

    function __construct()
	{
		parent::__construct();

        // Loading config
        //$this->load->config('kaimonokago');

        // Set container variable

        // Load the PUBLIC asset group in bep_assets.php
        $this->bep_assets->load_asset_group('PUBLIC');


        // Loading language helper
        $this->load->helper('language');

        session_start();

        // Loading all the module models here instead of autoload.php


        // Loading libraries instead of autoload
        $this->load->library('form_validation');
        //$this->load->library('validation'); // for BEP 0.6

        // Loading helpers
        //$this->load->helper( array('security', 'form', 'mytools') );
        //$this->mainmodule = $this->preference->item('main_module_name');
        //$this->data['mainmodule']= $this->mainmodule;
        
    }
}

/* End of Shop_controller.php */
/* Location: ./system/application/libraries/Shop_controller.php */