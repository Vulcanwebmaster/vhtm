<?php
	class Admin_Model_Myoutube extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListAccount()
		{
			$query=$this->db->query('select * from unc_youtube_account order by is_selected desc');
			return $query->fetchAll();
		}
		
		function deleteAccount($id)
		{
			$query=$this->db->query('delete from unc_youtube_account where youtube_id="'.$id.'"');
			return $query;
		}
		
		function insertAccount($input)
		{
			$query=$this->db->query('insert into unc_youtube_account value ("","'.$input['youtube_username'].'","'.$input['password'].'","'.$input['youtube_gallery'].'","'.$input['is_selected'].'")');
			return $query;
		}
		
		function getAccountSelected()
		{
			$query=$this->db->query('select youtube_id,youtube_username,password,youtube_gallery from unc_youtube_account where is_selected=1');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function getAccountById($id)
		{
			$query=$this->db->query('select * from unc_youtube_account where youtube_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function updateSelected($id)
		{
			$query=$this->db->query('update unc_youtube_account set is_selected=0 where youtube_id="'.$id.'"');
			return $query;
		}
		
		function editAccount($id,$input)
		{
			$query=$this->db->query('update unc_youtube_account 
									set youtube_username="'.$input['youtube_username'].'", password="'.$input['password'].'", youtube_gallery="'.$input['youtube_gallery'].'", is_selected="'.$input['is_selected'].'" 
									where youtube_id="'.$id.'"');
			return $query;
		}
		
	}