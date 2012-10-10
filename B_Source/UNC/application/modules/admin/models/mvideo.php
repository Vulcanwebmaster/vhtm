<?php
	class Admin_Model_Mvideo extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function insertVideoLink($input)
		{
			$query=$this->db->query('insert into unc_video values ("","'.$input['video_title'].'","'.$input['video_description'].'",null,"1","'.$input['video_full_link'].'",null,"'.$input['user_upload'].'")');
			return $query;
		}
		
		function insertVideo($input,$id_youtube)
		{
			$query=$this->db->query('insert into unc_video values ("","'.$input['video_title'].'","'.$input['video_description'].'","'.$input['video_link'].'","1","http://www.youtube.com/watch?v='.$input['video_link'].'","'.$id_youtube.'","")');
			return $query;
		}
		
		function exitsVideo($video_link)
		{
			$query=$this->db->query('select * from unc_video where video_link="'.$video_link.'"');
			$list=$query->fetchAll();
			if(count($list)>0) return true;
			else return false; 
		}
		
		function getListVideo()
		{
			$query=$this->db->query('select * from unc_video order by video_id desc');
			return $query->fetchAll();
		}
		
		function updateVideo($video_id,$input)
		{
			$query=$this->db->query('update unc_video 
									set video_title="'.$input['video_title'].'", video_description="'.$input['video_description'].'", is_active="1", video_full_link="'.$input['video_full_link'].'" 
									where video_id="'.$video_id.'"');
			return $query;
		}
		
		function editVideo($input)
		{
			$query=$this->db->query('update unc_video 
									set video_title="'.$input['video_title'].'", video_description="'.$input['video_description'].'" 
									where video_link="'.$input['video_link'].'"');
			return $query;
		}
		
		function getVideoLinkById($video_id)
		{
			$query = $this->db->query('select video_link from unc_video where video_id="'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0]['video_link'];
		}
		
		function getVideoById($video_id)
		{
			$query = $this->db->query('select * from unc_video where video_id="'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function getYouTubeIdByVideoId($video_id)
		{
			$query = $this->db->query('select youtube_id from unc_video where video_id="'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0]['youtube_id'];
		}
		
		function getAccountByYoutubeId($youtube_id)
		{
			$query = $this->db->query('select * from unc_youtube_account where youtube_id="'.$youtube_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function delVideo($video_id)
		{
			$query=$this->db->query('delete from unc_video where video_id="'.$video_id.'"');
			return $query;
		}
		
		
	}
		