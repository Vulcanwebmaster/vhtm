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
			$query=$this->db->query('select * from user where username="'.$username.'" and password="'.$password.'"');
			if (count($query->fetchAll())>0)
				return true;
			else return false;
		}
	}
?>