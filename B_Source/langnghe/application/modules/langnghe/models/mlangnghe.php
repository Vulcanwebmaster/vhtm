<?php
	class Mlangnghe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
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
		
		function getListFull2($tableName='')
	 {
	 	$this->db->select()
			->from('ln_village')
			->join('ln_category','ln_category.category_id=ln_village.category_id');
	 	$ds=$this->db->get('ln_village');
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
		
		function getListOffset1()
	 	{
		 	$this->db->select()
			->from('ln_village')
			->join('ln_category','ln_category.category_id=ln_village.category_id');
		 	$list=$this->db->get();
	 	
		 }
		function getListVillage()
		 {
		 	$this->db->select();
			$this->db->from('ln_village');
			$this->db->join('ln_category','ln_category.category_id=ln_village.category_id');
		 	$ds=$this->db->get('ln_village');
			
		 }
	}