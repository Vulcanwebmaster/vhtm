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
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and is_hot = "1" order by news_post_date desc');
			return $query->fetchAll();
		}
		
		function getNewsByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and news_id = "'.$news_id.'"');
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
										AND unc_news.news_status="Công khai"
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
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and category_id != 0');
			echo "<pre>";
			print_r($query->fetchAll());
			echo "</pre>";
			return $query->fetchAll();
		}
		function getListAds()
		{
			$query = $this->db->query('select * from unc_ads where category_id != 0');
			return $query->fetchAll();
		}

		function getCommentByNewsId($news_id)
		{
			$query = $this->db->query('select * from unc_comment where news_id = "'.$news_id.'" order by comment_time desc');
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
		
		function insertComment($input)
		{
			//$query = $this->db->query('insert into  unc_comment value ("","'.$input['comment_name'].'","'.$input['comment_email'].'","'.$input['comment_content'].'","'.$news_id.'","'.gmdate('Y-m-d h:i:s',time() + 7*3600).'")');
			$db = Zend_Registry::get('db');
			$db->insert('unc_comment',$input);
			//return $query;
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
			$query = $this->db->query('select * from unc_news where news_status="Công khai" order by news_post_date desc limit 5');
			return $query->fetchAll();
		}
		
		function getCategoryIdByNewsId($news_id)
		{
			$query = $this->db->query('select category_id from unc_news where news_status="Công khai" and news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			if(count($list) > 0) {
				return $list[0]['category_id'];
			} else { 
				return false;
			}
		}
		
		function getNewsPosted($categoryid)
		{
			$query = $this->db->query('select * from unc_news where news_status="Công khai" and category_id = "'.$categoryid.'" order by news_post_date desc limit 5');
			$list=$query->fetchAll();
			return $list;
		}
		
		/**
		 * Get category follow News id
		 * 
		 * @param $news_id
		 * @return string
		 */
		function getFirstCategoryIdByNewsId($news_id)
		{
			$query = $this->db->query('select category_id from unc_news where news_status="Công khai" and news_id = "'.$news_id.'"');
			$list = $query->fetchAll();
			if(count($list) > 0) {
				$pieces = explode(",", $list[0]['category_id']);
				return $pieces[0];
			} else { 
				return false;
			}
		}		
		
		
		/**
		 * Get news relate with active news follow $categoryid
		 * 
		 * @param array $categoryid
		 * @return array
		 */
		function getNewsRelate($categoryid)
		{
			$db = Zend_Registry::get('db');
			$select = $db	->select()
							->from('unc_news', array('news_id','news_title','alias'))
							->where('FIND_IN_SET (?,category_id)', $categoryid)
							->where("news_status = 'Công khai'")
							->order(array('news_post_date desc'))
							->limit(5);
			$query  = $db->fetchAll($select);
			//$query = $this->db->query('select * from unc_news where news_status="Công khai" and category_id = "'.$categoryid.'" order by news_post_date desc limit 5');
			//$list=$query->fetchAll();
			return $query;
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

		/**
		 * Get list comment by news id (only query command)
		 * 
		 * @param int $news_id
		 * @return string (query command)
		 */
		public function getLstCommentByNewID($news_id)
		{
			$db = Zend_Registry::get('db');
			$select = $db	->select()
							->from('unc_comment')
							->where('news_id = ?', $news_id)
							->order(array('comment_time desc'));
			return $select;			
		}
		
		/**
		 * Get info of a comment 
		 * 
		 * @param int $idcomment
		 * @return array
		 */
		public function getInfoComment($idcomment)
		{
			$db = Zend_Registry::get('db');
			$select = $db	->select()
							->from('unc_comment')
							->where('comment_id = ?', $idcomment);
			$result = $db->fetchAll($select);
			return $result; 		
		} 
		 
		/**
		 * Increase like when people click Like
		 * 
		 * @param int $idcomment
		 * @return none (update for table unc_comment)
		 */
		public function likeComment($idcomment) 
		{
			
			$db = Zend_Registry::get('db');
			$select = $db	->select()
							->from('unc_comment', array('like'))
							->where('comment_id = ?', $idcomment);
			$result = $db->fetchAll($select);
			foreach ($result as $key => $value) {
				$like = $value['like'];
			}
			
			$like = $like + 1;
			$data = array ('like' => $like);
			$where = "comment_id = ".$idcomment;
			$db->update('unc_comment', $data, $where); 						
		}
		
		/**
		 * Increase vipham when people click vipham
		 * 
		 * @param int $idcomment
		 * @return none (update for table unc_comment)
		 */
		public function viphamComment($idcomment) 
		{
			
			$db = Zend_Registry::get('db');
			$select = $db	->select()
							->from('unc_comment', array('vipham'))
							->where('comment_id = ?', $idcomment);
			$result = $db->fetchAll($select);
			foreach ($result as $key => $value) {
				$vipham = $value['vipham'];
			}
			
			$vipham = $vipham + 1;
			$data = array ('vipham' => $vipham);
			$where = "comment_id = ".$idcomment;
			$db->update('unc_comment', $data, $where); 						
		}		
	}