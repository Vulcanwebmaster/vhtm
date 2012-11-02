<?php
	class Admin_Model_MvideoUNC extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getList()
		{
			$query  = $this->db->query('select * from unc_video where video_extension != "" order by is_active desc,video_id desc');
			return $query->fetchAll();
		}
		
		function insertVideo($input)
		{
			$str = 'insert into unc_video values ("","'.$input['video_title'].'","'.$input['video_alias'].'","'.$input['video_description'].'","'.$input['video_link'].'","'.$input['is_active'].'",null,null,"'.$input['user_upload'].'","'.$input['category_id'].'","'.$input['video_extension'].'")';
			$query = $this->db->query($str);
			return $query;
		}
		
		function getVideoById($video_id)
		{
			$query = $this->db->query('select * from unc_video where video_id = "'.$video_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function editVideo($input)
		{
			$query = $this->db->query('update unc_video 
									set video_title="'.$input['video_title'].'", video_alias="'.$input['video_alias'].'", video_description="'.$input['video_description'].'", is_active="'.$input['is_active'].'",category_id="'.$input['category_id'].'" 
									where video_id="'.$input['video_id'].'"');
			return $query;
		}
		
		function editAbc()
		{
			$query = $this->db->query('update unc_video set video_extension = "" where video_extension = 0');
		}
		
		function delVideo($video_id)
		{
			$query = $this->db->query('delete from unc_video where video_id = "'.$video_id.'"');
			return $query;
		}
		
		function getListVideoCategory()
		{
			$query = $this->db->query('select * from unc_video_category where is_active = 1');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
	}
?>
		