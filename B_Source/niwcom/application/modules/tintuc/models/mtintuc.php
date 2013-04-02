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
		$list=$this->db->get('tintuc');
		return $list->num_rows();
	}
	
	function getListNewOfTag($tableName='',$columnName='',$id='')
	{
		$this->db->select();
		$this->db->from('tintuc');
		$this->db->where('id_tags', $id); 
		$this->db->join('tintuc_tags','tintuc_tags.id_tintuc=tintuc.id');
		
		
		$ds=$this->db->get();
		//var_dump($ds); die();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
		
	}
	
	 function getListTinTuc($tableName='',$offset='', $columnName='', $value='',$index='')
	 {
	 	$this->db->where($columnName,$value);
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
