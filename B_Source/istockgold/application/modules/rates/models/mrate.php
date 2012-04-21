<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MRate extends CI_Model
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
	function getRateId($from, $to)
	{
		echo $from;
		$data = array();
		$this->db->select('rate_id');
        $this->db->where('c_id_src',$from);
        $this->db->where('c_id_dst', $to);
        $Q = $this->db->get('rate');
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        
        if (count($data) > 0)
        	return $data['rate_id'];
        else 
        	return null;
	}
	
}//end class
?>