<?php
class Mdanhmuc extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountOnline($tableName='',$columnName='',$index='')
	{
		
		$this->db->select();
		$this->db->from('fg_accounts');
		$this->db->where('status', 1); 
		
		$ds=$this->db->get();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return count($list);
	}
}