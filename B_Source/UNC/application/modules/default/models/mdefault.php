<?php
	class Default_Model_Mdefault extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
		}
		
		function getListHotNews()
		{
			$query = $this->db->query('select * from unc_news where is_hot=1 order by rand() limit 6');
			return $query->fetchAll();
		}
		
		function getListMostView()
		{
			$query = $this->db->query('select distinct news_title,news_id from unc_news order by viewer_number desc limit 6');
			return $query->fetchAll();
		}
		
		function getNewsByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_news where news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
	}