<?php
class Mgiaidau extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	 function getListCategory($tableName='',$columnName='',$index='')
	 {
		 $this->db->select();
		 $this->db->from('fg_tournaments');
		 $this->db->join('fg_games','fg_games.game_id=fg_tournaments.game_id');
 		
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
	
	function getRowBySetting($tableName='')
	 {
	 	$this->db->select();
		
	 	$ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		
	 	return $list;
	 }
	 
	 function getListUsername($tableName='',$columnName='',$id_tour='')
	 {
 		
		 $this->db->select();
		 $this->db->from('fg_list_player');
		 $this->db->where('tour_id', $id_tour); 
		 $this->db->join('fg_accounts','fg_accounts.id=fg_list_player.account_id');
 		
		 $ds=$this->db->get();
		 $list=array();
	 	 foreach($ds->result() as $item)
	 	 {
	 		 $list[]=$item;
	 	 }
	 	 $ds->free_result();
	 	 return $list;
	 }
	function CountPlayer($tableName='',$columnName='',$id_tour='')
	{
		
		$this->db->select();
		$this->db->from('fg_list_player');
		$this->db->where('tour_id', $id_tour); 
		$this->db->join('fg_accounts','fg_accounts.id=fg_list_player.account_id');
		
		$ds=$this->db->get();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return count($list);
	}
	function check($id_account,$id_tour){
		$this->db->select();
		$this->db->from('fg_list_player');
		$this->db->where('account_id', $id_account); 
		$this->db->where('tour_id', $id_tour); 
		$ds=$this->db->get();
		//var_dump($ds); die();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		if(count($list) == 1){
			return TRUE;
		}else{
			return FALSE;
		}
	
	}
	
	function check2($id_account){
		$this->db->select();
		$this->db->from('fg_list_player');
		$this->db->where('account_id', $id_account); 
		$ds=$this->db->get();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
		//var_dump($ds); die();
	 	$ds->free_result();
		//var_dump($list); die();
		if(count($list) == 1){
			return TRUE;
		}else{
			return FALSE;
		}
	//var_dump($list); die();
	}
	
	
	function getListAccount()
	{
		$this->db->select();
		$this->db->from('fg_tournaments');
		$this->db->join('fg_accounts','fg_accounts.id=fg_tournaments.tour_id');
		
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
	
	function gameWeek($index=''){
		$this->db->where('start_date >' ,date("Y-m-d h:i:s "));
		$this->db->where('end_date <' ,date("Y-m-d", strtotime('next sunday')));
		$this->db->select();
		$this->db->from('fg_tournaments');
		$ds=$this->db->get($index);
		
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		//var_dump($list);die();
	 	return $list;
	}

	 function getDayOfWeek($pTimezone)
	{

    	$userDateTimeZone = new DateTimeZone($pTimezone);
    	$UserDateTime = new DateTime("now", $userDateTimeZone);

    	$offsetSeconds = $UserDateTime->getOffset(); 
    //echo $offsetSeconds;

   		 return gmdate("l", time() + $offsetSeconds);

	}
	
	
	
	function gameNextWeek(){
		$this->db->where('start_date >' ,date("m-d-Y", strtotime('next sunday')));
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
	
	function getRowByColumn($tableName='',$columnName='',$value='')
	 {
	 	$this->db->where($columnName,$value);
	 	$ds=$this->db->get($tableName);
	 	if ($ds->num_rows()>0)
	 	{
	 		$item=$ds->row(0);
	 		$ds->free_result();
	 		return $item;
	 	}
	 	else return false;
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
	
	function Topgiaidau($limit){
		$this->db->select();
		$this->db->from('fg_tournaments');
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