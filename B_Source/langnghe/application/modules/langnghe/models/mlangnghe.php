<?php
	class Mlangnghe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getListFullsp($tableName='')
	 	{
		 	$this->db->select();
			$this->db->from('ln_village');
			$this->db->join('ln_category','ln_category.category_id=ln_village.category_id');
		 	$ds=$this->db->get();
			//var_dump($ds->result()); die();
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