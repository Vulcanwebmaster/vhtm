<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MContact extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}
	
	function getMessageByID($id = 0)
	{
   		$this->db->where('message_id',id_clean($id));
		$Q = $this->db->get('is_contact_us');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    return $data;
	}
}
?>