<?php
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
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
	
	function CountRegister($tableName='')
	 {
 		
		 $this->db->select('id');
		 $this->db->from('fg_accounts');
 		
		 $ds=$this->db->get();
		 $list=array();
	 	 foreach($ds->result() as $item)
	 	 {
	 		 $list[]=$item;
	 	 }
	 	 $ds->free_result();
	 	 return count($list);
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
	
	function getListNewsTag($tableName='',$columnName='',$index='')
	{
		
		$this->db->select();
		$this->db->from('fg_news_tag');
		$this->db->where('id_news', 1); 
		$this->db->join('fg_tag','fg_tag.id=fg_news_tag.id_tagv');
		$ds=$this->db->get();
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
	
	
