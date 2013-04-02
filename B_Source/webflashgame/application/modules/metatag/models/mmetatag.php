<?php
class Mmetatag extends CI_Model
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
		$this->db->join('fg_games','fg_games.game_id=fg_tournaments.game_id');
		
		$ds=$this->db->get();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
		
	}
}