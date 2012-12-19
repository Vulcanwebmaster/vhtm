<?php
class Mdangnhap extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function getAccountByUserPass($email='', $pass='')
	{
		$this->db->where(array ('email'	=>	$email,
								'password'	=>	$pass));
		$query = $this->db->get('ln_user');
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