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
}