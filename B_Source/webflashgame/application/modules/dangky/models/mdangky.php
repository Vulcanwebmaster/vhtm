<?php
	class Mdangky extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getAccountByUserPass($nick='', $password='')
		{
		$this->db->where(array ('username'	=>	$nick,
								'password'	=>	$password));
		$query = $this->db->get('fg_accounts');
		$list=$query->result();
		$result=array();
		foreach ($list as $account)
		{
			$result[] = $account;
		}
		$query->free_result();
		return $result;
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
	}