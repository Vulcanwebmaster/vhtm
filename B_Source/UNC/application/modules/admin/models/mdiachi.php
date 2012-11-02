<?php
	class Admin_Model_Mdiachi extends Zend_Db_Table_Abstract
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
		function getListDiachibyAddress($danhmuc)
		{
			$query = $this->db->query('select * from unc_address where danhmuc = "'.$danhmuc.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		function editDiachi($danhmuc,$input)
		{
			$query=$this->db->query('update unc_address 
									set noidung="'.$input['noidung'].'", lienket="'.$input['lienket'].'"
									where danhmuc="'.$danhmuc.'"');
			return $query;
		}
	}
?>