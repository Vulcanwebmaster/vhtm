<?php
	class Admin_Model_Mcomment extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $_name="unc_comment";
		function __construct()
		{
			parent::__construct();
			$this->db=Zend_Registry::get('db');
		}
		
		function getListComment($where,$offset,$limit,$order)
		{
			if ($where=='')
				$where=" WHERE unc_news.news_id = unc_comment.news_id ";
			else $where.=" AND unc_news.news_id = unc_comment.news_id ";
			$query=$this->db->query('select unc_comment.*, unc_news.news_title from unc_comment, unc_news '.$where.$order.$limit.$offset);
			return $query->fetchAll();
		}
		
		function getListCommentByUserRole2($userId, $where, $offset, $limit, $order)
		{
			if ($where=='')
				$where=' WHERE unc_news.user_id='.$userId.' AND unc_comment.news_id=unc_news.news_id ';
			else $where.=' AND unc_news.user_id='.$userId.' AND unc_comment.news_id=unc_news.news_id ';
			$query=$this->db->query("SELECT unc_comment.comment_content,unc_comment.comment_id, unc_news.news_title
									FROM unc_news, unc_comment".$where.$order.$limit.$offset);
			return $query->fetchAll();
		}
		
		function getListCommentByUserRole1($userId,$listCateId, $where, $offset, $limit, $order)
		{
			$whereLike=' AND ';
			$count=0;
			foreach ($listCateId as $categoryId)
			{
				if ($count==0)
					$whereLike.='(unc_news.category_id LIKE "%,'.$categoryId.',%" ';
				else
				{
					$whereLike.='OR unc_news.category_id LIKE "%,'.$categoryId.',%" ';
				}
				$count++;
			}
			$whereLike.=") ";
			
			if ($where=='')
				$where=' WHERE (unc_news.news_id = unc_comment.news_id'.$whereLike.' 
								AND unc_manage_category.user_id = '.$userId.')';
			else $where.=' AND unc_news.news_id = unc_comment.news_id'.$whereLike.' 
								AND unc_manage_category.user_id = '.$userId.' ';
			$query=$this->db->query("SELECT DISTINCT unc_comment.*, unc_news.news_title
									FROM unc_comment, unc_manage_category, unc_news".$where.$order.$limit.$offset);
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
									set comment_content="'.$input['comment_content'].'", news_id="'.$input['news_id'].'"
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
		
		function delCommentByNewsid($newsId)
		{
			$where="news_id = '".$newsId."'";
			$result=$this->delete($where);
			return $result;
		}
	}
