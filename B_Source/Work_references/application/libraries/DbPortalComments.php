<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class dbPortalComments {
	function returnPortalComments($orderBy = "id", $asc = false)
	{
		$ascending = "asc";
		if (!$asc)
			$ascending = "desc";
	
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM portalcomments order by $orderBy $ascending");
		
		return $query->result();
	}
	
	function addPortalComment($name, $timestamp, $comment)
	{
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO portalcomments VALUES('','$name','$timestamp','$comment')");
		return $CI->db->call_function('insert_id');
	}
	
	function deletePortalComment($id)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM portalcomments WHERE id = '$id'");
	}
}

?>