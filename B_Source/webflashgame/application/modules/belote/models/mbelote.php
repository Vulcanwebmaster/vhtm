<?php
class Mbelote extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	//top giai dau co so tien thuong cao nhat
	function Topgiaidau($limit)
	{
		$this->db->select();
		$this->db->from('fg_tournaments');
		$this->db->order_by("tienthuong", "desc");
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
	
	//top nguoi thang cuoc co so tien thuong cao nhat
	function Topwin($limit)
	{
		$this->db->select();
		$this->db->from('fg_accounts');
		$this->db->order_by("money", "desc");
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