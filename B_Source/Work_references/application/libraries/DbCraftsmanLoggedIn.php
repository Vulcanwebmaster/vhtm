<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class dbCraftsmanLoggedIn {
	function returnNewInquiries($craftsmanId, $lastVisit)
	{
		//vrne seznam povpraševanj za levi "seznam povpraševanj"
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT id, title, region, deadline FROM inquiries WHERE craftsman_id = '$craftsmanId' and timestamp > '$lastVisit'");
		return $query->result();
	}
	
	/*(?6) returnNewNotices($craftsmanId): *  ta metoda morda ne spada v domeno baze; odloèi glede na odgovor. SICER: vrne seznam novih obvestil za "obvestila box". */
	
	function returnNewQuestions($craftsmanId, $lastVisit)
	{
		//vrne seznam novih vprašanj za levi "obvestila box"
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT id, question, asking FROM inquiries WHERE question_timestamp > '$lastVisit' and (craftsman_id = '-1' or craftsman_id = '$craftsmanId')");
		return $query->result();
	}
}

?>