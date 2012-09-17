<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class dbQuestions {
	function addQuestion($timestamp, $asking, $question, $craftsmanId = false) //*(boolean)false, if the question goes to pool (default)
	{
		if ($craftsmanId == false)
			$craftsmanId = -1;
	
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO questions VALUES('','$timestamp','','$craftsmanId','$asking','','$question','')");
		return $CI->db->insert_id();
	}
	
	function addAnswer($questionId, $craftsmanId, $answer, $timestamp)
	{
		$CI =& get_instance();
		$query = $CI->db->query("UPDATE questions SET answer = '$answer', answer_timestamp = '$timestamp', answering_id = '$craftsmanId',craftsman_id='$craftsmanId' WHERE id = '$questionId'");
	}
	
	function deleteQuestion($id)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM questions WHERE id = '$id'");
	}
	
	function listQuestions($conditions=array(), $start="", $order="")
	{
	    
		$CI =& get_instance();
        $where = !empty($conditions)?" WHERE ".implode(" AND ",$conditions):"";
        if($order == '')
            $order = " ORDER BY `id` DESC";
        else
            $order = " ORDER BY ".$order;
        $offset = get_question_display_constant();
        $limitSql = ((string)$start != "")?" LIMIT $start,$offset":"";
        //var_dump($limitSql);
        //echo "SELECT * FROM questions ".$where.$order.$limitSql;
		$query = $CI->db->query("SELECT * FROM questions ".$where.$order.$limitSql);
		
		return $query->result();
	}
    
    function getQuestionsTotal($conditions=array())
	{
		$CI =& get_instance();
        $where = !empty($conditions)?" WHERE ".implode(" AND ",$conditions):"";
		$query = $CI->db->query("SELECT COUNT(*) AS total FROM questions ".$where);
		
		return (int)$query->row()->total;
	}
	
	function returnQuestionData($questionId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM questions WHERE id = '$questionId'");
		foreach ($query->result() as $row)
			return $row;
			
	}
	
	function editQuestion($questionId, $question)
	{
		$CI =& get_instance();
		$query = $CI->db->query("UPDATE questions SET question = '$question' WHERE id = '$questionId'");
	}
	
	function editAnswer($questionId, $answer)
	{
		$CI =& get_instance();
		$query = $CI->db->query("UPDATE questions SET answer = '$answer' WHERE id = '$questionId'");
	}
}

?>