<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MAccount extends CI_Model
{
	function __construct()
    {
        parent::__construct();
	}

	/**
	 * return the rate ID
	 * 
	 * @param unknown_type $from
	 * @param unknown_type $to
	 */
	function getAccountInfo($currency)
	{
		$data = array();
		$this->db->select('account_setting.*');
		$this->db->from('account_setting');
		$this->db->join('currency', 'currency.c_id = account_setting.c_id');
		$this->db->where('currency.code', $currency);
		
		$Q = $this->db->get();
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        
        return $data;
	}
	
}//end class
?>