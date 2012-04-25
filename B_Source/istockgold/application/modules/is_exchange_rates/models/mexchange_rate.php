<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MExchange_rate extends CI_Model
{
	function __construct()
    {
        parent::__construct();
	}
	
    function updateRate($data)
    {
    	$this->db->where('c_id_src',$data['c_id_src']);
    	$this->db->where('c_id_dst',$data['c_id_dst']);
    	$this->db->update('is_rate', $data);
    }
}//end class
?>