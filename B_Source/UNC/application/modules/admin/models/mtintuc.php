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
			$query=$this->db->query("insert into unc_news (news_title, news_summary, news_content,  news_post_date) values('".$input['news_title']."','".$input['news_summary']."','".$input['news_content']."','".gmdate('Y-m-d h:i:s')."')");
			return $query;
		}
	}
	
	function getListNews()
	{
		$query=$this->db->query("select * from unc_news");
		return $query->fetchAll();
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