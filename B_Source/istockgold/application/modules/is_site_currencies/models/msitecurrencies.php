<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MSiteCurrencies extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }   
    
    function getAllKey() {
    	$this->db->select('key');
    	$Q = $this->db->get("is_account_setting");
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data = $row;
                break;
            }
        }
        $Q->free_result();
        return $data;
    }
    
    function updateValueByKey($key, $data)
    {
       $this->db->where('key', $key);
	   $this->db->update("is_account_setting", $data);
    }
}
?>