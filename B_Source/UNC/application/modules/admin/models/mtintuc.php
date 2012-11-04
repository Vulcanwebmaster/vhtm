<?php
 class Admin_Model_Mtintuc extends Zend_Db_Table_Abstract
{
	protected $_name="unc_news";
 	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}
	
	function isExist($title)
	{
		$query=$this->db->query("select * from unc_news where news_title='".$title."'");
		if (count($query->fetchAll())>0)
			return true;
		else return false;
	}
	
	function insertNews($input)
	{
		if (!$this->isExist($input['news_title']))
		{
			$this->insert($input);
			//$query=$this->db->query('insert into unc_news (news_title, news_summary, news_content, news_author,  news_post_date, category_id,is_hot,viewer_number) values("'.$input['news_title'].'","'.$input['news_summary'].'","'.$input['news_content'].'","'.$input['news_author'].'","'.gmdate('Y-m-d h:i:s',time() + 7*3600).'","'.$input['category_id'].'","'.$input['is_hot'].'","")');
			//return $query;
		}
	}
	
	function addNews($input,$checkbox)
	{
		if (!$this->isExist($input['news_title']))
		{
			$query=$this->db->query("insert into unc_news (news_title, news_summary, news_avatar, news_content, news_author,  news_post_date,news_modified_date,news_status, category_id,is_hot,viewer_number) values('".$input['news_title']."','".$input['news_summary']."', '".$input['news_avatar']."','".$input['news_content']."','".$input['news_author']."','".gmdate('Y-m-d h:i:s',time() + 7*3600)."','".gmdate('Y-m-d h:i:s',time() + 7*3600)."','".$input['news_status']."','".$checkbox."','".$input['is_hot']."','')");
			return $query;
		}
	}
	
	function getCategoryIDByUserId($userid)
	{
		$query=$this->db->query("select * from unc_manage_category where user_id='".$userid."'");
		$list=$query->fetchAll();
		$categoriesId=array();
		foreach ($list as $item)
		{
			$count=0;
			foreach ($categoriesId as $ctId)
			{
				if ($ctId==$item['category_id'])
				{
					$count++;
					break;
				}
			}
			if ($count==0)
				$categoriesId[]=$item['category_id'];
		}
		return $categoriesId;
	}
	
	function getListNews()
	{
		$query=$this->db->query("select * from unc_news");
		return $query->fetchAll();
	} 
	
	function getListNewsByUserId($userid)
	{
		$categoriesId = $this->getCategoryIDByUserId($userid);
		$result=array();
		foreach ($categoriesId as $categoryId)
		{
			$query=$this->db->query("select * from unc_news where category_id='".$categoryId."'");
			$list=$query->fetchAll();
			foreach ($list as $item)
			{
				$result[]=$item;
			}
		}
		return $result;
	} 
	
	function getCategoryById($categoryId)
	{
		$query=$this->db->query("select * from unc_category where category_id='".$categoryId."'");
		$list=$query->fetchAll();
		if (count($list)>0)
		{
			return $list[0];
		}
		return false;
	} 
	
	function deleteNews($id)
	{
		$query=$this->db->query('delete from unc_news where news_id="'.$id.'"');
		return $query;
	}
	
	function getListCategories()
	{
		$query=$this->db->query("select * from unc_category");
		return $query->fetchAll();
	}
	
	function getNewsById($id)
	{
		$query=$this->db->query('select * from unc_news where news_id="'.$id.'"');
		$list=$query->fetchAll();
		return $list[0];
	}
	
	function replaceChar( $char1, $char2, $string)
	{
		return str_replace($char1, $char2, $string);
	}
	
	function editnews($id,$input,$checkbox)
	{
		$news_title=$input['news_title'];
		$news_alias=$input['alias'];
		$news_summary=$this->replaceChar("'",'"', $input['news_summary']);
		$news_avatar=$this->replaceChar("'",'"', $input['news_avatar']);
		$news_content=$this->replaceChar("'",'"', $input['news_content']);
		//$news_author=$input['news_author'];
		if ($input['news_status'] != "Chưa duyệt") {
			$news_author=$input['news_author'];
		} else {
			$news_author="";
		}		
		$news_post_date=$input['news_post_date'];
		$news_modified_date=$input['news_modified_date'];
		$news_status=$input['news_status'];
		//$category_id=$input['category_id'];
		$is_hot = $input['is_hot'];
		
		$query=$this->db->query("update unc_news 
								set news_title='".$news_title."',  alias='".$news_alias."', news_summary='".$news_summary."', news_avatar='".$news_avatar."', news_content='".$news_content."', news_author='".$news_author."', news_post_date='".$news_post_date."',news_modified_date='".$news_modified_date."',news_status='".$news_status."',category_id='".$checkbox."',is_hot='".$is_hot."'
								where news_id='".$id."'");
		return $query;
		//set news_title="'.$news_title.'", news_summary="'.$news_summary.'", news_content="'.$news_content.'", news_author="'.$news_author.'", news_post_date="'.$news_post_date.'",news_modified_date="'.$news_modified_date.'",news_status="'.$news_status.'",category_id="'.$category_id.'"
	}

	function countChildById($category_id)
	{
		$query=$this->db->query("select * from unc_category where category_parent_id='".$category_id."'");
		$list=$query->fetchAll();
		return count($list);
	}

		function getListAllThamdo()
		{
			$query=$this->db->query("select * from unc_polls");
			return $query->fetchAll();
		}
		function getListThamdobyid($polls_id)
		{
			$query = $this->db->query('select * from unc_polls where polls_id = "'.$polls_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		function editThamdo($polls_id,$input)
		{
			$query=$this->db->query('update unc_polls 
									set polls_content="'.$input['polls_content'].'"
									where polls_id="'.$polls_id.'"');
			return $query;
		}	
		public function insertthamdo($input)
		{
			if($this->db->insert('unc_polls',$input)) return true;
			else return FALSE;
		}
		public function deletethamdo($polls_id)
		{
			$query=$this->db->query('delete from unc_polls where polls_id="'.$polls_id.'"');
			return $query;
		}
}