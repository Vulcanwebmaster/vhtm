<?php
	class Default_Model_Mvideo extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getCategoryByCategoryId($id)
		{
			$query = $this->db->query('select * from unc_video_category where category_id = "'.$id.'"');
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function isActive($listCategoriesid)
		{
			$count=0;
			foreach($listCategoriesid as $id)
			{
				$cate=$this->getCategoryByCategoryId($id);
				if ($cate['is_active']=='1')
					$count++;
			}
			if ($count>0) return true;
			else return false;
		}
		
		function getListVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1" order by video_id desc');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $video)
			{
				$listCategoriesid=explode(',', $video['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$video;
			}
			return $result;
		}
		
		function getListNewsVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1"  order by video_id desc limit 6');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $video)
			{
				$listCategoriesid=explode(',', $video['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$video;
			}
			return $result;
		}
		
		function getListMostVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1"  order by viewer_number desc limit 6');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $video)
			{
				$listCategoriesid=explode(',', $video['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$video;
			}
			return $result;
		}
		
		function getVideoByVideoId($video_id)
		{
			$query = $this->db->query('select * from unc_video where video_id = "'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function getVideoByCategoryName()
		{
			$query = $this->db->query('select * from unc_video_category where is_active="1"');
			return $query->fetchAll();
		}
		function getVideoByCategoryId($category_id)
		{
			$query = $this->db->query('SELECT unc_video.*, unc_video_category.category_name
										FROM unc_video, unc_video_category
										WHERE unc_video.category_id = unc_video_category.category_id
										AND unc_video.is_active = "1"
										AND unc_video.category_id = "'.$category_id.'"');
						
										
			return $query->fetchAll();
		}
		
		function getListForumUser()
		{
			$query = $this->forum->query('select userid, username from user');
			return $query->fetchAll();
		}
		
		function getListCommentByVideoId($video_id)
		{
			$query = $this->db->query('select * from unc_video_comment where video_id = "'.$video_id.'"');
			return $query->fetchAll();
		}
		
		function getListAvatar()
		{
			$query = $this->forum->query('select userid,dateline from customavatar');
			return $query->fetchAll();
		}

		function insertComment($name,$email,$video_id,$comment_content)
		{
			$query = $this->db->query('insert into unc_video_comment value ("","'.$name.'","'.$email.'","'.$comment_content.'","'.$video_id.'","'.gmdate('Y-m-d h:i:s',time() + 7*3600).'")');
			return $query;
		}
	}