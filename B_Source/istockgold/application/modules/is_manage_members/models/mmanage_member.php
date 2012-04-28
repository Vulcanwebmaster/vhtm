<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Mmanage_member extends CI_Model
{
	function __construct()
    {
        parent::__construct();
	}
	
	
	
function getSearch($search)
    {
    	
    	$data = array();
    	$this->db->like('full_name', $search); 
    	$this->db->order_by('user_id','asc');
        $Q = $this->db->get('is_user');
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