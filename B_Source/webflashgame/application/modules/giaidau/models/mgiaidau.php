<?php
class Mgiaidau extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	
	function getListCategory()
	{
		$this->db->select();
		$this->db->from('fg_tournaments');
		$this->db->join('fg_games','fg_games.id=fg_tournaments.game_id');
		
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
	
	function gameToday(){
		$this->db->where('end_date >' ,date('Y-m-d'));
		$this->db->where('end_date <' ,date('Y-m-d').' 23:59:59');
		$this->db->select();
		$this->db->from('fg_tournaments');
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
	
	function gameWeek(){
		$this->db->where('start_date >' ,date("Y-m-d h:i:s "));
		$this->db->where('end_date <' ,date("Y-m-d", strtotime('next sunday')));
		$this->db->select();
		$this->db->from('fg_tournaments');
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

	function gameNextWeek(){
		$this->db->where('start_date >' ,date("Y-m-d", strtotime('next sunday')));
		$this->db->select();
		$this->db->from('fg_tournaments');
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
	
	function gamePast(){
		$this->db->where('end_date <' ,date('Y-m-d'));
		$this->db->select();
		$this->db->from('fg_tournaments');
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