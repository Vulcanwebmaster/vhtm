<?php
class Mtintuc extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('ta_news');
		return $list->row();
	}
	
	function getListFull($tableName='')
	 {
	 	$ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	
	function getListOffset($tableName='',$offset='',$index='')
	 {
	 	$ds=$this->db->get($tableName,$offset,$index);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
}
