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
		
		function getListParent()
		{
			$query = $this->db->query('select * from unc_category where category_parent_id=0 and is_active=1');
			return $query->fetchAll();
		}
		
		function getListChild()
		{
			$query = $this->db->query('select * from unc_category where category_parent_id!=0 and is_active=1');
			return $query->fetchAll();
		}
		
		function getTinTuc($category_parent_id){
			$query = $this->db->query('SELECT unc_news.news_id,unc_news.news_summary, 
										unc_news.news_title,
										unc_news.news_post_date,
										unc_category.category_parent_id
										FROM unc_news, unc_category
										WHERE unc_news.category_id = unc_category.category_id
										AND unc_category.category_parent_id="'.$category_parent_id.'"
										AND unc_news.category_id !=0
										ORDER BY news_post_date DESC limit 8');
			return $query->fetchAll();
		}

		function isParent($id)
		{
			$query = $this->db->query('select * from unc_category where category_id="'.$id.'" and category_parent_id=0');
			$list = $query->fetchAll();
			if(count($list)>0)
				return true;
			else return false;
		}
		
		function getListChildByParent($parent)
		{
			$query = $this->db->query('select category_id from unc_category where category_parent_id = "'.$parent.'"');
			return $query->fetchAll();
		}
		
		function getListNewsByCategoryId($CategoryId)
		{
			$query = $this->db->query('select * from unc_news where category_id = "'.$CategoryId.'"');
			return $query->fetchAll();
		}
		function getListAdsByCategoryId($CategoryId)
		{
			$query = $this->db->query('select * from unc_ads where category_id = "'.$CategoryId.'"');
			return $query->fetchAll();
		}

		function getListNews()
		{
			$query = $this->db->query('select * from unc_news where category_id != 0');
			return $query->fetchAll();
		}
		function getListAds()
		{
			$query = $this->db->query('select * from unc_ads where category_id != 0');
			return $query->fetchAll();
		}
	}