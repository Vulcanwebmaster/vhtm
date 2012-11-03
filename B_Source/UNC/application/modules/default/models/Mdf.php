<?php
	class Default_Model_Mdf extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum,$_name="unc_news";
		function __construct()
		{
			parent::__construct();
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getListHotNews()
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and is_hot=1 order by rand() limit 6');
			return $query->fetchAll();
		}
		
		function getListHotNewsByCategoryId($category_id)
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and is_hot=1 and category_id ="'.$category_id.'" order by rand() limit 6');
			return $query->fetchAll();
		}
		
		function getListHotNewsJs()
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and is_hot=1 order by news_post_date DESC limit 4');
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
			$query = $this->db->query('select * from unc_ads where ads_position=3 order by ads_start_date DESC limit 2');
			return $query->fetchAll();
		}
		
		function getListAds4()
		{
			$query = $this->db->query('select * from unc_ads where ads_position=4 order by ads_start_date DESC limit 2');
			return $query->fetchAll();
		}
		
		function getListMostView()
		{
			$query = $this->db->query('select distinct news_title,news_id,alias from unc_news where news_status="Công khai" order by viewer_number desc limit 6');
			return $query->fetchAll();
		}
		
		function getNewsByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function getListVideoByLimit($limit)
		{
			$query=$this->db->query("select * from unc_video limit ".$limit);
			return $query->fetchAll();
		}

		function getListThread()
		{
			$query = $this->forum->query('select * from thread limit 6');
			return $query->fetchAll();
		}
		
		function getListImage()
		{
			$query = $this->db->query('select * from unc_images where is_active = 1 order by image_id desc');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
	}