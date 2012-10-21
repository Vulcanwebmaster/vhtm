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
		
		function getListHotNewsJs()
		{
			$query = $this->db->query('select * from unc_news where is_hot=1 order by news_post_date DESC limit 4');
			return $query->fetchAll();
		}
		function getListAds()
		{
			$query = $this->db->query('select * from unc_ads order by rand() limit 3');
			return $query->fetchAll();
		}
		
		function getListMostView()
		{
			$query = $this->db->query('select distinct news_title,news_id,alias from unc_news order by viewer_number desc limit 6');
			return $query->fetchAll();
		}
		
		function getNewsByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_news where news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
	}