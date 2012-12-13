<?php
class Mgiangvien extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getListByColumnOffsetsp($tableName='',$columnName='',$value='', $index='', $limit='')
		{
		 	$this->db->where($columnName,$value);
		 	$ds=$this->db->get($tableName,$limit,$index);
		 	$list=array();
		 	foreach($ds->result() as $item)
		 	{
		 		$list[]=$item;
		 	}
		 	$ds->free_result();
		 	return $list;
		}
}