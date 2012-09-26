<?php
	class Admin_Model_Mdanhmuc extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListDM()
		{
			$query=$this->db->query('select * from unc_category');
			return $query->fetchAll();
		}
		
		function deleteDm($id)
		{
			$query=$this->db->query('delete from unc_category where category_id="'.$id.'"');
			return $query;
		}
		
		function insertDm($input)
		{
			$query=$this->db->query('insert into unc_category values ("","'.$input['category_name'].'","'.$input['category_parent_id'].'","'.$input['is_active'].'")');
			return $query;
		}
		
		function getDmById($id)
		{
			$query=$this->db->query('select * from unc_category where category_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function editDm($id,$input)
		{
			$query=$this->db->query('update unc_category 
									set category_name="'.$input['category_name'].'", category_parent_id="'.$input['category_parent_id'].'", is_active="'.$input['is_active'].'" 
									where category_id="'.$id.'"');
			return $query;
		}
	}
?>