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
			$query=$this->db->query('select * from unc_user where user_login="'.$username.'" and user_pass="'.$password.'"');
			if (count($query->fetchAll())>0)
				return true;
			else return false;
		}
	}
?>