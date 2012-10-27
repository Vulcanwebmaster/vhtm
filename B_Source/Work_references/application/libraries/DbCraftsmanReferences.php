<?php
// (c) 2012 HeyYa dev team. All rights reserved.

//TODO: hard-coded mojmojster.references table name..

class dbCraftsmanReferences {
	
	protected $Files;
	function setReferences($Files)
	{
		$this->Files = $Files;
	}
	
	 
	function returnReferencesListUncategorized ($categoryId = '-1')
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.references where category_id = '$categoryId' ORDER BY file_id DESC, timestamp DESC, comment DESC");
		return $query->result();
	}
	
	function returnFile($fileId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.files where id = '$fileId'");
		return $query->row();
	}
	
	function returnReferencesListLimit($craftsmanId, $categoryId='-1')
	{
		//vrne seznam id-jev referenc nekega mojstra. lahko je to prazna mno�ica.
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.references where craftsman_id = '$craftsmanId' AND category_id = '$categoryId' ORDER BY file_id DESC, timestamp DESC, comment DESC limit 10");
		return $query->result();
	}
	
	function returnReferencesList_1($craftsmanId, $categoryId)
	{
		//vrne seznam id-jev referenc nekega mojstra. lahko je to prazna mno�ica.
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.references where craftsman_id = '$craftsmanId' AND category_id = '$categoryId' ORDER BY file_id DESC, timestamp DESC, comment DESC");
		return $query->result();
	}
	
	function returnReferencesList($craftsmanId, $categoryId='-1')
	{
		//vrne seznam id-jev referenc nekega mojstra. lahko je to prazna mno�ica.
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.references where craftsman_id = '$craftsmanId' AND category_id = '$categoryId' ORDER BY file_id DESC, timestamp DESC, comment DESC");
		return $query->result();
	}
	
	function returnReferencePictureId($referenceId)
	{
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT file_id FROM mojmojster.references WHERE mojmojster.references.id = '$referenceId'");
		
		foreach ($query->result() as $row)
			return $row->file_id;
		return false; //�e ni obstoje� podatek, vrne false.
	}
	
	function returnReferenceTitle($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT title FROM mojmojster.references where id = '$referenceId'");
		
		foreach ($query->result() as $row)
			return $row->title;
			
		return false; //�e ni obstoje� podatek, vrne false.
	}
	
	function returnReferenceText($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT text FROM mojmojster.references where id = '$referenceId'");
		
		foreach ($query->result() as $row)
			return $row->text;
	
		return false; //�e ni obstoje� podatek, vrne false.
	}
	
	function returnReferenceComment($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT comment FROM mojmojster.references where id = '$referenceId'");
		
		foreach ($query->result() as $row)
			return $row->comment;
			
		return false; //�e ni obstoje� podatek, vrne false.
	}
	
	function returnReferenceCommentAuthor($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT comment_author FROM mojmojster.references where id = '$referenceId'");
		
		foreach ($query->result() as $row)
			return $row->comment_author;
			
		return false; //�e ni obstoje� podatek, vrne false.
	}
	
	function returnReferenceRatings($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM ratings WHERE rated_id = '$referenceId' AND (type = 'price' OR type = 'speed' OR type = 'quali') ORDER BY type");
		
		return $query->result();
	}

	function addRating($type, $rating, $ratedId) //accepted as type: price, speed, quali
	{
		if ($type != "price" && $type != "speed" && $type != "quali")
			return false; //in case of bad arguments, false is returned. TODO: logging.
			
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO ratings VALUES('','$type','$rating','$ratedId')");
	}
	

	function setReference($craftsmanId, $timestamp, $image, $title, $text, $comment, $commentAuthor, $categoryId)
	{
		//echo $image;die();
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO mojmojster.references VALUES('','$timestamp','$image','$title','$text','$comment','$commentAuthor','$craftsmanId','$categoryId')");
		
		return $CI->db->call_function('insert_id');
	}
	
	function deleteReference($referenceId)
	{
		$CI =& get_instance();
		
		$fileId = $this->returnReferencePictureId($referenceId);
		$this->Files->deleteFile($fileId);
		
		$query = $CI->db->query("DELETE FROM mojmojster.references WHERE id = '$referenceId'");

	}
	
	function setProductCategory($craftsmanId, $categoryTitle, $categoryId = false)
	{
	
		$CI =& get_instance();
		
		if ($categoryId)
		{
			$query = $CI->db->query("UPDATE productcategories SET craftsman_id = '$craftsmanId', category_title = '$categoryTitle' WHERE id = '$categoryId'");
			return true;
		}
		else
		{
			$query = $CI->db->query("INSERT INTO productcategories VALUES('','$craftsmanId','$categoryTitle')");
			return $CI->db->call_function('insert_id');
		}
	}
	
	function deleteProductCategory($categoryId) //Just deletes category. Does not change any references to this category etc.
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM productcategories WHERE id = '$categoryId'");
	}
	
	function listProductCategories($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM productcategories where craftsman_id = '$craftsmanId'");
		
		return $query->result();
	}
	
	function returnProductCategoryTitle($categoryId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT category_title FROM productcategories where id = '$categoryId'");
		
		foreach ($query->result() as $row)
			return $row->category_title;
	}
	
	function deleteReferenceRatings($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM ratings WHERE rated_id = '$referenceId' AND (type = 'price' OR type = 'speed' OR type = 'quali')");
	}
	
	function reportComment($referenceId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO reports VALUES('','refcom','$referenceId')");
	}
}

?>