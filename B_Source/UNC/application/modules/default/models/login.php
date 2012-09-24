<?php
	class Default_Model_Login
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		function isExist($username='',$pass='')
		{
			$query=$this->db->query('select * from user where username="'.$username.'" and password="'.$pass.'"');
			$count= count($query->fetchAll());
			if ($count>0) return true;
			else return false;
		}
	}