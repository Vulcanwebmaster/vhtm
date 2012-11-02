<?php
	class Admin_Model_Mdiachi extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListDiachi()
		{
			$query=$this->db->query('select * from unc_address');
			return $query->fetchAll();
		}
		function getListDiachibyAddress($address)
		{
			$query = $this->db->query('select * from unc_images where address = "'.$address.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		function editDiachi($address,$input)
		{
			$query=$this->db->query('update unc_address 
									set address="'.$input['address'].'", contact="'.$input['contact'].'"
									where address="'.$address.'"');
			return $query;
		}
	}
?>