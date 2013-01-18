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
}