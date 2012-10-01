<?php
	class Admin_Model_Mcomment extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListComment()
		{
			$query=$this->db->query('select * from unc_comment');
			return $query->fetchAll();
		}
		
		function deleteComment($id)
		{
			$query=$this->db->query('delete from unc_comment where comment_id="'.$id.'"');
			return $query;
		}
		
		function insertComment($input)
		{
			$query=$this->db->query('insert into unc_comment values ("","'.$input['category_content'].'","'.$input['category_parent_id'].'","'.$input['is_active'].'")');
			return $query;
		}
		
		function getCommentById($id)
		{
			$query=$this->db->query('select * from unc_comment where comment_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function editComment($input)
		{
			$query=$this->db->query('update unc_comment 
									set comment_content="'.$input['comment_content'].'", news_id="'.$input['news_id'].'", reader_id="'.$input['reader_id'].'" 
									where comment_id="'.$input['comment_id'].'"');
			return $query;
		}
		
		function getNewsOtherId($news_id)
		{
			$query=$this->db->query('select news_id from unc_news where news_id !="'.$news_id.'"');
			return $query->fetchAll();
		}
	}
?>