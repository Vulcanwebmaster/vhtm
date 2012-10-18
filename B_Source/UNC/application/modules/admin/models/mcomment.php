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
		
		function getListReader()
		{
			$query = $this->db->query('select * from unc_comment_user');
			return $query->fetchAll();
		}
		
		function getListNews()
		{
			$query = $this->db->query('select * from unc_news');
			return $query->fetchAll();
		}
		
		function getListCategoryId($user_id)
		{
			$query = $this->db->query('select * from unc_manage_category where user_id="'.$user_id.'"');
			return $query->fetchAll();
		}
		
		function getNewsByCategoryId($category_id)
		{
			$query = $this->db->query('select news_id from unc_news where category_id="'.$category_id.'"');
			return $query->fetchAll();
		}
		
		function getCommentByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_comment where news_id="'.$news_id.'"');
			return $query->fetchAll();
		}
		
		function getListNewsByAuthor($news_author)
		{
			$query = $this->db->query('select news_id from unc_news where news_author="'.$news_author.'"');
			return $query->fetchAll();
		}
		
		function getCommentById($id)
		{
			$query=$this->db->query('select * from unc_comment where comment_id="'.$id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function editComment($id,$input)
		{
			$query=$this->db->query('update unc_comment 
									set comment_content="'.$input['comment_content'].'", news_id="'.$input['news_id'].'", reader_id="'.$input['reader_id'].'" 
									where comment_id="'.$id.'"');
			return $query;
		}
		
		function getNewsOtherId($news_id)
		{
			$query=$this->db->query('select news_id from unc_news where news_id !="'.$news_id.'"');
			return $query->fetchAll();
		}
		
		function getNewsTitleByNewsId($news_id)
		{
			$query = $this->db->query('select news_title from unc_news where news_id="'.$news_id.'"');
			$list = $query->fetchAll();
			if(isset($list[0]['news_title']))
				return $list[0]['news_title'];
		}
		
		function getNewsByNewsId($news_id)
		{
			$query=$this->db->query('select news_id from unc_news where news_id="'.$news_id.'"');
			$list=$query->fetchAll();
			return $list[0];
		}
		
		function getReaderNameByReaderId($reader_id)
		{
			$query=$this->db->query('select comment_user_fullname from unc_comment_user where comment_user_id="'.$reader_id.'"');
			$list=$query->fetchAll();
			return $list[0]['comment_user_fullname'];
		}
	}
?>