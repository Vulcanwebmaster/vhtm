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
		
		function getListHotNewsByCategoryId($category_id)
		{
			$query = $this->db->query('select * from unc_news where is_hot=1 and category_id ="'.$category_id.'" order by rand() limit 6');
			return $query->fetchAll();
		}
		
		function getListHotNewsJs()
		{
			$query = $this->db->query('select * from unc_news where is_hot=1 order by news_post_date DESC limit 4');
			return $query->fetchAll();
		}
		function getListAds()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=5 order by rand() limit 10');
			return $query->fetchAll();
		}
		
		function getListAds1()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=1 order by ads_start_date DESC limit 1');
			$list = $query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return  false;
		}
		
		function getListAds2()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=2 order by ads_start_date DESC limit 1');
			$list = $query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function getListAds3()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=3 order by ads_start_date DESC limit 1');
			$list = $query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return  false;
		}
		
		function getListAds4()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=4 order by ads_start_date DESC limit 1');
			$list = $query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return  false;
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
		
		function getVideoDefault()
		{
			$query = $this->db->query('select * from unc_video where is_default = "1"');
			$list = $query->fetchAll();
			if(count($list) > 0)
				return $list[0]['video_full_link'];
			else return false;
		}
	}