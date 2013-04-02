<?php
class Mgames extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getListCategory($tableName='fg_games',$columnName='game_id',$index='')
	{
		$this->db->select();
		$this->db->from('fg_games');
		$this->db->join('fg_category','fg_category.id=fg_games.category_id');
		$this->db->where('game_id',$index);
		$ds=$this->db->get();
		
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
		
	}
	
	function getListCategory1()
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
	function getTypeCategory($tableName='',$columnName='',$value='')
	 {
		$this->db->from('fg_games');
		$this->db->join('fg_category','fg_category.id=fg_games.category_id');
	 	$this->db->where($columnName,$value);
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
	 
	function getCount(){
		$this->db->select();
		$this->db->from('fg_games');
		$this->db->join('fg_category','fg_category.id=fg_games.category_id');
		
		$ds=$this->db->get();
	}
	function getListOffsetcate($tableName='',$offset='',$index='')
	 {
	 	$this->db->select();
		$this->db->from('fg_games');
		$this->db->join('fg_category','fg_category.id=fg_games.category_id');
	 	$ds=$this->db->get('fg_category',$offset,$index);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	function CountFull()
	{
		$list=$this->db->get('fg_games');
		return $list->num_rows();
	}
	
	function getCoursesCate($id)
	{
		$query->$this->db->query("SELECT name FROM fg_games, fg_category WHERE fg_games.category_id=fg_category.id");
		return $query->result();
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
	
	function TopGame($limit){
		$this->db->select();
		$this->db->from('fg_games');
		$this->db->order_by("count_dem", "desc");
		//$this->db->order_by("title", "desc"); 
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