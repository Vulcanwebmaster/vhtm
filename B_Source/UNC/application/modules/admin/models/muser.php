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
		
		function deleteUser($id)
		{
			$query=$this->db->query('delete from unc_user where user_id="'.$id.'"');
			return $query;
		}
		
		function insertUser($input)
		{
			$query=$this->db->query('insert into unc_user value ("","'.$input['user_login'].'","'.$input['user_pass'].'","'.$input['user_fullname'].'","'.$input['user_email'].'","'.$input['user_address'].'","'.$input['is_active'].'","'.$input['role_id'].'")');
			return $query;
		}
		
		function getUserById($id)
		{
			$query=$this->db->query('select * from unc_user where user_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function editUser($id,$input)
		{
			$query=$this->db->query('update unc_user 
									set user_login="'.$input['user_login'].'", user_pass="'.$input['user_pass'].'", user_fullname="'.$input['user_fullname'].'", user_email="'.$input['user_email'].'", user_address="'.$input['user_address'].'",is_active="'.$input['is_active'].'",role_id="'.$input['role_id'].'" 
									where user_id="'.$id.'"');
			return $query;
		}
	}