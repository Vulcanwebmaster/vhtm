<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MNews extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}
	
	function getNewsByID($id = 0)
	{
   		$this->db->where('id',id_clean($id));
		$Q = $this->db->get('is_news');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    return $data;
	}
	
	function updateNewsByID($id = 0, $data)
	{
   		$this->db->where('id',id_clean($id));
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->update("is_news",$data);
	}
	
	function addNews($data)
	{
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("is_news",$data);
	}
}
?>