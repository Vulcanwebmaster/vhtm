<?php
	class Default_Model_Mtintuc extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getListHotNews()
		{
			$query = $this->db->query('select * from unc_news where is_hot = "1" order by news_post_date desc');
			return $query->fetchAll();
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
			$query = $this->db->query('SELECT unc_news.news_id,unc_news.news_summary,unc_news.alias, 
										unc_news.news_avatar, 
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

		function getCommentByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_comment where news_id = "'.$news_id.'" order by comment_id desc');
			return $query->fetchAll();
		}
		
		function getListForumUser()
		{
			$query = $this->forum->query('select userid, username from user');
			return $query->fetchAll();
		}
		
		function getUserByUserId($userid)
		{
			$query = $this->forum->query('select username,password from user where userid = "'.$userid.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function isUserName($user_name)
		{
			$query = $this->forum->query('select * from user where username = "'.$user_name.'"');
			$list = $query->fetchAll();
			if(count($list)>0)
				return true;
			else return false;
		}

		function getSaltByUserName($user_name)
		{
			$query = $this->forum->query('select salt from user where username = "'.$user_name.'"');
			$list = $query->fetchAll();
			return $list[0]['salt'];
		}
		
		function getPassWordByUserName($user_name)
		{
			$query = $this->forum->query('select password from user where username = "'.$user_name.'"');
			$list = $query->fetchAll();
			return $list[0]['password'];
		}
		
		function getUserIdByUserNameForum($user_name)
		{
			$query = $this->forum->query('select userid from user where username = "'.$user_name.'"');
			$list = $query->fetchAll();
			return $list[0]['userid'];
		}
		
		function insertComment($reader_id,$news_id,$comment_content)
		{
			$query = $this->db->query('insert into unc_comment value ("","'.$comment_content.'","'.$news_id.'","'.$reader_id.'","'.gmdate('Y-m-d h:i:s',time() + 7*3600).'")');
			return $query;
		}
		
		function getListAvatar()
		{
			$query = $this->forum->query('select userid,dateline from customavatar');
			return $query->fetchAll();
		}
		
		function getListNewsByDate($start_time,$end_time)
		{
			$query = $this->db->query('select * from unc_news where news_post_date between "'.$start_time.'" and  "'.$end_time.'" order by news_post_date desc');
			return $query->fetchAll();
		}

		function getNewestNews()
		{
			$query = $this->db->query('select * from unc_news order by news_post_date desc limit 5');
			return $query->fetchAll();
		}
		
		function getCategoryIdByNewsId($news_id)
		{
			$query = $this->db->query('select category_id from unc_news where news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			if(count($list) > 0)
				return $list[0]['category_id'];
			else return false;
		}
		
		function getNewsPosted($categoryid)
		{
			$query = $this->db->query('select * from unc_news where category_id = "'.$categoryid.'" order by news_post_date desc limit 5');
			$list=$query->fetchAll();
			return $list;
		}
		
		function getParentByChild($categoryid)
		{
			$query = $this->db->query('select category_parent_id from unc_category where category_id = "'.$categoryid.'"');
			$list = $query->fetchAll();
			if(count($list) > 0)
				return $list[0]['category_parent_id'];
			else return false;
		}
		
		function getCategoryNameByCategoryId($categoryid)
		{
			$query = $this->db->query('select * from unc_category where category_id = "'.$categoryid.'"');
			$list = $query->fetchAll();
			if(count($list) > 0)
				return $list[0];
			else return false;
		}
		
		function getListThread()
		{
			$query = $this->forum->query('select * from thread limit 6');
			return $query->fetchAll();
		}
	}