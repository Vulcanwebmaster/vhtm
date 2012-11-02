<?php
	class Default_Model_Mdiachi extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListAllDiachi()
		{
			$query=$this->db->query('select * from unc_address');
			return $query->fetchAll();
		}
		function getListDiachi()
		{
			$query=$this->db->query('SELECT noidung, lienket FROM unc_address WHERE danhmuc = "diachi" LIMIT 1');
			return $query->fetchAll();
		}
		function getListLienhe()
		{
			$query=$this->db->query('SELECT noidung, lienket FROM unc_address WHERE danhmuc = "lienhequangcao" LIMIT 1');
			return $query->fetchAll();
		}
		function getListVanmieu()
		{
			$query=$this->db->query('SELECT noidung, lienket FROM unc_address WHERE danhmuc = "vanmieu" LIMIT 1');
			return $query->fetchAll();
		}
		function getListVomieu()
		{
			$query=$this->db->query('SELECT noidung, lienket FROM unc_address WHERE danhmuc = "vomieu" LIMIT 1');
			return $query->fetchAll();
		}
	}
?>