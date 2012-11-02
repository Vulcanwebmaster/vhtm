<?php
	class Default_Model_Mdiachi extends Zend_Db_Table_Abstract
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
		function editDiachi($id,$input)
		{
			$query=$this->db->query('update unc_address 
									set diachi_content="'.$input['diachi_content'].'", news_id="'.$input['news_id'].'"
									where diachi_id="'.$id.'"');
			return $query;
		}
	}
?>