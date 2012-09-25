<?php
	class Admin_Model_Muser extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListByRole($role)
		{
			$query=$this->db->query('select * from unc_user where role_id="'.$role.'"');
			return $query->fetchAll();
		}
	}