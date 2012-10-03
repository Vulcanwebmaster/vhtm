<?php
	class Admin_Model_Mchuyenmuc extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListCM()
		{
			$query=$this->db->query('select * from unc_category order by category_parent_id asc, is_active desc, category_id desc');
			return $query->fetchAll();
		}
		
		function getListCmParent()
		{
			$query=$this->db->query('select * from unc_category where category_parent_id=0');
			return $query->fetchAll();
		}
		
		function deleteCm($id)
		{
			$query=$this->db->query('delete from unc_category where category_id="'.$id.'"');
			return $query;
		}
		
		function insertCm($input)
		{
			$query=$this->db->query('insert into unc_category values ("","'.$input['category_name'].'","'.$input['category_parent_id'].'","'.$input['is_active'].'")');
			return $query;
		}
		
		function getCategoryNameById($id)
		{
			$query=$this->db->query('select category_name from unc_category where category_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function getCmById($id)
		{
			$query=$this->db->query('select * from unc_category where category_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function editCm($id,$input)
		{
			$query=$this->db->query('update unc_category 
									set category_name="'.$input['category_name'].'", category_parent_id="'.$input['category_parent_id'].'", is_active="'.$input['is_active'].'" 
									where category_id="'.$id.'"');
			return $query;
		}
	}
?>