<?php
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
	
	
	function getListCategory()
	{
		$this->db->select();
		$this->db->from('fg_games');
		$this->db->join('fg_category','fg_category.id=fg_games.category_id');
		
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
	
	function getListFullCategory($tableName='')
	 	{
	 	$this->db->select();
		$this->db->from('fg_category');
		$this->db->join('fg_games','fg_games.category_id=fg_category.id');
	 	$ds=$this->db->get();
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		//var_dump($list);die();
	 	return $list;
		}
		
		function getTopGame($limit){
		$this->db->select();
		$this->db->from('fg_games');
		$this->db->order_by("count_dem", "desc");
		$this->db->limit($limit);
		$ds=$this->db->get();
		
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		//var_dump($list);die();
	 	return $list;
	}
	}
	
	
