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
										ORDER BY news_post_date DESC limit 9');
			return $query->fetchAll();
		}
	}