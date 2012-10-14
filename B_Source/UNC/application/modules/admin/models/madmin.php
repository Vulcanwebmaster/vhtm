<?php
	class Admin_Model_Madmin extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function isExistAccount($username,$password)
		{
			$query=$this->db->query('select * from unc_user where user_login="'.$username.'" and user_pass="'.$password.'" and is_active=1');
			if (count($query->fetchAll())>0)
				return true;
			else return false;
		}
	
		function getAccountByUser($username)
		{
			$query=$this->db->query('select * from unc_user where user_login="'.$username.'"');
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
	
		function getRoleByUser($user)
		{
			$query = $this->db->query('select role_id from unc_user where user_login="'.$user.'"');
			$list = $query->fetchAll();
			return $list[0]['role_id'];
		}
		
		function getCountingInMonth($month,$year)
		{
			$query = $this->db->query('select * from unc_counting where month='.$month.' and year='.$year);
			$list = $query->fetchAll();
			return $list;
		}
		
		function getCountingInYear($year)
		{
			$query = $this->db->query('select sum(access), month from unc_counting where year='.$year.' group by month');
			$list = $query->fetchAll();
			return $list;
		}
		
		function getListYear()
		{
			$query = $this->db->query('select year from unc_counting group by year');
			$list = $query->fetchAll();
			return $list;
		}
	}
?>