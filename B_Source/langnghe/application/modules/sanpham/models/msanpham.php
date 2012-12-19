<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getListFullsp($tableName='')
	 	{
	 	$this->db->select();
		$this->db->from('ln_product');
		$this->db->join('ln_category','ln_category.category_id=ln_product.category_id');
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
	}