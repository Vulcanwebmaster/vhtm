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
		
		function getListVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1" and is_default != "1" order by video_id desc');
			return $query->fetchAll();
		}
		
		function getListNewsVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1"  order by video_id desc limit 6');
			return $query->fetchAll();
		}
		
		function getListMostVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1"  order by viewer_number desc limit 6');
			return $query->fetchAll();
		}
		
		function getVideoByVideoId($video_id)
		{
			$query = $this->db->query('select * from unc_video where video_id = "'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0];
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