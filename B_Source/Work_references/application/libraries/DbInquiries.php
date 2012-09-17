<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class dbInquiries {
	protected $Files;
	
	function setReferences($Files)
	{
		$this->Files = $Files;
	}

	function returnInquiry($inquiryId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM inquiries where id = '$inquiryId'");
		
		foreach ($query->result() as $row)
			return $row;
	}
	
	function addInquiry($timestamp, $title, $nameSurname, $region, $phone, $mail, $what, $deadlineStart, $deadlineFinish, $location)
	{
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO inquiries VALUES ('','$timestamp','$title','$nameSurname','$region','$phone','$mail','$what','$deadlineStart','$deadlineFinish','$location')");
	
		return $CI->db->call_function('insert_id');
	}
	
	
	function addInquiryConnections($inquiryId, $connectionsArray) //requested format: Array(craftsmanId1,craftsmanId2,...)
	{
		$CI =& get_instance();

		foreach ($connectionsArray as $connection)
			$query = $CI->db->query("INSERT INTO sentinquiries VALUES ('$inquiryId','$connection','0')");
		
		//OBSOLETE, WRONG INTERPRETATION BUT GOOD SNIPPET:
		//requested format: Array(Array(inquiryId,craftsmanId1),Array(inquiryId,craftsmanId2),...)
		/*
		{
			
			$inquiryId = $connection[0];
			$craftsmanId = $connection[1];
		}
		*/
	}
	
	function setInquiryChecked($inquiryId, $craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("UPDATE sentinquiries SET checked = '1' WHERE inquiry_id = '$inquiryId' AND craftsman_id = '$craftsmanId'");
	}
	
	function deleteInquiryConnection($inquiryId, $craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM sentinquiries WHERE inquiry_id = '$inquiryId' AND craftsman_id = '$craftsmanId'");
	}
	
	function deleteInquiry($id) //also deletes inquiry connections
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM sentinquiries WHERE inquiry_id = '$id'");
		$query = $CI->db->query("DELETE FROM inquiries WHERE id = '$id'");
		
		$inquiriesFiles = $this->getInquiriesFiles($id);
		foreach ($inquiriesFiles as $file)
			$this->Files->deleteFile($file->file_id);
		
	}
	
	function setInquiryUnchecked($inquiryId, $craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("UPDATE sentinquiries SET checked = '0' WHERE inquiry_id = '$inquiryId' AND craftsman_id = '$craftsmanId'");
	}
	
	function addFileToInquiry($inquiryId, $fileId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO inquiriesfiles VALUES('$inquiryId','$fileId')");
	}
	
	function deleteFileFrominquiry($inquiryId, $fileId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM inquiriesfiles WHERE inquiry_id = '$inquiryId' AND file_id = '$fileId'");
	}
	
	function getCraftsmanInquiries($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM sentinquiries WHERE craftsman_id = '$craftsmanId'");
		
		return $query->result();
	}

	function getInquiriesFiles($inquiryId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM inquiriesfiles WHERE inquiry_id = '$inquiryId'");
		
		return $query->result();
	}
}

?>