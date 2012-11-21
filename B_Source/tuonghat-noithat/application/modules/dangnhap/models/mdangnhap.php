<?php
class Mdangnhap extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	/*
	 * get list of account by username and password
	 */
	
	function getAccountByUserPass($email='', $pass='')
	{
		$this->db->where(array ('email'	=>	$email,
								'password'	=>	$pass));
		$query = $this->db->get('tn_user');
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