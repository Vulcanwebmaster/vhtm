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
	}