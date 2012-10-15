<?php
 class Admin_Model_Mtintuc extends Zend_Db_Table_Abstract
{
 	private $db;
	function __construct()
	{
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
			$query=$this->db->query("insert into unc_news (news_title, news_summary, news_content, news_author,  news_post_date, category_id) values('".$input['news_title']."','".$input['news_summary']."','".$input['news_content']."','".$input['news_author']."','".gmdate('Y-m-d h:i:s',time() + 7*3600)."','".$input['category_id']."')");
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
	
	function editnews($id,$input)
	{
		$news_title=$input['news_title'];
		$news_summary=$this->replaceChar("'",'"', $input['news_summary']);
		$news_content=$this->replaceChar("'",'"', $input['news_content']);
		$news_author=$input['news_author'];
		$news_post_date=$input['news_post_date'];
		$news_modified_date=$input['news_modified_date'];
		$news_status=$input['news_status'];
		$category_id=$input['category_id'];
		
		$query=$this->db->query("update unc_news 
								set news_title='".$news_title."', news_summary='".$news_summary."', news_content='".$news_content."', news_author='".$news_author."', news_post_date='".$news_post_date."',news_modified_date='".$news_modified_date."',news_status='".$news_status."',category_id='".$category_id."'
								where news_id='".$id."'");
		return $query;
		//set news_title="'.$news_title.'", news_summary="'.$news_summary.'", news_content="'.$news_content.'", news_author="'.$news_author.'", news_post_date="'.$news_post_date.'",news_modified_date="'.$news_modified_date.'",news_status="'.$news_status.'",category_id="'.$category_id.'"
	}
}