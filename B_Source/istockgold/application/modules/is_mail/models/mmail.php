<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MMail extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}
	
	function getMailByID($id = 0)
	{
   		$this->db->where('id',id_clean($id));
		$Q = $this->db->get('is_mail');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    return $data;
	}
	
	function updateMailByID($id = 0, $data)
	{
   		$this->db->where('id',id_clean($id));
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->update("is_mail",$data);
	}
	
	function addMail($data)
	{
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("is_mail",$data);
	}
}
?>