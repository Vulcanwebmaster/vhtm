<?php
	class Default_Model_Mhinhanh extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getListImageRight()
		{
			$query = $this->db->query('select * from unc_images where is_active = 1 order by image_id desc limit 6');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
		
		function getListImageLeft()
		{
			$query = $this->db->query('select * from unc_images where is_active = 1 order by image_id desc');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
		
		function getListCategory()
		{
			$query = $this->db->query('select * from unc_images_category where is_active = 1');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
	}
?>