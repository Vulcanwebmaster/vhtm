<?php
	class Default_Model_Mtintuc extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getNewsByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_news where news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function getNewsByCategoryId($category_id)
		{
			$query = $this->db->query('select news_id from unc_news where category_id = "'.$category_id.'"');
			return $query->fetchAll();
		}
	}