<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class DbNews {
	function setNews($craftsmanId, $title, $content, $timestamp, $newsId = false)
	{
		$CI =& get_instance();
		if ($newsId)
		{
			$query = $CI->db->query("UPDATE news SET craftsman_id = '$craftsmanId', title = '$title', content = '$content', timestamp = '$timestamp' WHERE id = '$newsId'");
			return true;
		}
		else
		{
			$query = $CI->db->query("INSERT INTO news VALUES('','$craftsmanId','$title','$content','$timestamp')");
			return $CI->db->call_function('insert_id');
		}
		
	}
	
	function returnNews($craftsmanId = false, $limitNumber = false)
	{
		if($limitNumber)
			$limitNumber = " LIMIT $limitNumber";
		else
			$limitNumber = "";
			
		$condition = "";
		if ($craftsmanId)
			$condition = " WHERE craftsman_id = '$craftsmanId'";
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM news".$condition.$limitNumber);
		return $query->result();
		
	}
	
	function deleteNews($newsId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM news WHERE id = '$newsId'");

	}
}

?>