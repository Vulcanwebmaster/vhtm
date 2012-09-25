<?php
	class Admin_Model_Mphongvien extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListPV()
		{
			$query=$this->db->query('select * from phongvien');
			return $query->fetchAll();
		}
	}