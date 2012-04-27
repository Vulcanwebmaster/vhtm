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
    private $store_key;
    
    function __construct()
    {
        parent::__construct();
        // Check for access permission
        $this->load->model('MSiteCurrencies');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_site_currencies';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_site_currencies_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('id','c_id','key','display','value','note','order');
        $orderby = array('id','order');
        $data['site_currencies'] = $this->MIStockGold->getAll("account_setting",$fields, $orderby);
        $data['module'] = $this->module;
        $this->store = $data['site_currencies'];
        return $data;
    }

	function _fields()
    {
    	$data = null;
    	return $data;
    }

    function fields($value)
    {
    	$main_value = str_replace(".", "_", $value);  
        $data = array(
        'value'      => $_POST[$main_value]
        );
        //echo $data['value'];
        return $data;
    }

    function edit()
    {
        if ($this->input->post('liberty_account') && $this->input->post('liberty_account_name') &&
        $this->input->post('liberty_account_storename') && $this->input->post('western_receiver_firstname') &&
        $this->input->post('western_receiver_lastname') && $this->input->post('western_receiver_city') &&
        $this->input->post('western_receiver_country'))
        {
            $this->store_key = $this->MSiteCurrencies->getAllKey();
            foreach ($this->store_key as $key => $temp)
			{
            	$data = $this->fields($temp['key']);
          		$this->MSiteCurrencies->updateValueByKey($temp['key'],$data);
			}
            flashMsg('success',"Update site currencies infor");
        }
        redirect('is_site_currencies/admin/index','refresh');
    }
    
    function getAccountLBName($accountID)
    {
		include  base_url()."helper/ApiAgent.php";
		$auth = new Authentication($accountID, "ApiName", "SecurityWord");
		$accountToRetrieve = "X567";
		$apiAgent = ApiAgentFactory::createApiAgent(ApiAgentFactory::SOAP, $auth); 
		$accountName = $apiAgent->accountName($accountToRetrieve);    
		return $accountName;
    }   
}//end class
?>
