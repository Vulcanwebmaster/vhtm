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
        $this->load->model('MExchange_rate');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_exchange_rates';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_exchange_rate_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('c_id_src','c_id_dst','rate_dst');
        $orderby = array('c_id_src','c_id_dst');
        $data['rates'] = $this->MIStockGold->getAll('rate',$fields, $orderby);
        
        $fields = array('c_id','c_name','c_metal_name');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll('currency',$fields, $orderby);
        
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

    function _fields($row_id,$column_id)
    {
    	$val = $this->input->post('tb_'.$row_id.'_'.$column_id);
		$pieces = explode(":", $val);
		$rate_src = floatval($pieces[0]);
    	$rate_dst = floatval($pieces[1]);
    	$rate_dst = round($rate_dst/$rate_src,4);
		
        $data = array(
        'c_id_src'       => $row_id,
        'c_id_dst'   	 => $column_id,
        'rate_dst'		 => $rate_dst
        );
        return $data;
    }


    function update()
    {
    	$fields = array('c_id');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll('currency',$fields, $orderby);
        $xyz = $data['currencies'];
        foreach($xyz as $key => $list1 )
        {
         	foreach($xyz as $key => $list2 )
        	{
        		if($list1['c_id'] != $list2['c_id'])
        		{
        			$data = $this->_fields($list1['c_id'], $list2['c_id']);
        			$this->MExchange_rate->updateRate($data);
        		}
        	}
        }
        flashMsg('success','Updated successfully!!!');
        redirect('is_exchange_rates/admin/index','refresh');
    }
}//end class
?>
