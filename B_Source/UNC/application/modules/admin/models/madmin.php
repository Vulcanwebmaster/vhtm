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
		
		function getRoleByUser($user)
		{
			$query = $this->db->query('select role_id from unc_user where user_login="'.$user.'"');
			$list = $query->fetchAll();
			return $list[0]['role_id'];
		}
	}
?>