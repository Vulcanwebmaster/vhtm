<?php
	class Admin_Model_Mvideo extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		
		function insertVideo($input)
		{
			$query=$this->db->query('insert into unc_video values ("","'.$input['video_title'].'","'.$input['video_description'].'","'.$input['video_link'].'","0")');
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
			$query=$this->db->query('select * from unc_video');
			return $query->fetchAll();
		}
		
		function editVideo($input)
		{
			$query=$this->db->query('update unc_video 
									set video_title="'.$input['video_title'].'", video_description="'.$input['video_description'].'", is_active="0" 
									where video_link="'.$input['video_link'].'"');
			return $query;
		}
		
		function getVideoByVideoLink($video_link)
		{
			$query = $this->db->query('select * from unc_video where video_link="'.$video_link.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
	}
?>
		