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
		
		function getListParentSubOne($id)
		{
			$query = $this->db->query('select * from unc_category where category_parent_id=0 and category_id !="'.$id.'"');
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
			$query=$this->db->query('insert into unc_category values ("","'.$input['category_name'].'","'.$input['alias'].'","'.$input['category_parent_id'].'","'.$input['is_active'].'")');
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
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function isParent($id)
		{
			$query = $this->db->query('select * from unc_category where category_id="'.$id.'" and category_parent_id=0');
			$list = $query->fetchAll();
			if(count($list)>0)
				return true;
			else return false;
		}
		
		function editCm($id,$input)
		{
			$query=$this->db->query('update unc_category 
									set category_name="'.$input['category_name'].'", alias="'.$input['alias'].'", category_parent_id="'.$input['category_parent_id'].'", is_active="'.$input['is_active'].'" 
									where category_id="'.$id.'"');
			return $query;
		}
		
		function getListParent()
		{
			$query =  $this->db->query('select * from unc_category where category_parent_id=0 and is_active=1');
			return $query->fetchAll();
			//var_dump($query->fetchAll());die();
		}

		function getListChild()
		{
			$query = $this->db->query('select * from unc_category where category_parent_id!=0 and is_active=1');
			return $query->fetchAll();
		}
		
		function insertUserForCategory($user_id,$category_id)
		{
			$query = $this->db->query('insert into unc_manage_category values ("'.$user_id.'","'.$category_id.'")');
			return $query;
		}
		
		function getListCategoryIdByUserId($user_id)
		{
			$query = $this->db->query('select distinct category_id from unc_manage_category where user_id="'.$user_id.'"');
			return $query->fetchAll();
		}

		function delManageCategoryByUserId($user_id)
		{
			$query = $this->db->query('delete from unc_manage_category where user_id="'.$user_id.'"');
			return $query;
		}
	}
?>