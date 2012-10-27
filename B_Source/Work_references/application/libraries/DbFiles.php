<?php


class DbFiles
{
	function storeFile($fileFieldName, $type='file')
	{	//TODO: IMPELEMNT SECURITY. SEE hasRightToStore(...).
		global $_FILES;
		if (isset($_FILES["$fileFieldName"]) && $_FILES["$fileFieldName"]["error"] == 0)
		{
			$fileName = $_FILES["$fileFieldName"]["name"];
		  	$fileType = $_FILES["$fileFieldName"]["type"];
			
			$CI =& get_instance();
			$query = $CI->db->query("INSERT INTO files VALUES('','$fileType','$type','$fileName')");
			$fileId = $CI->db->insert_id();
		
			$tmpLocation = $_FILES["$fileFieldName"]["tmp_name"];
			if (!move_uploaded_file($tmpLocation, $CI->config->item('files_dir').$fileId.".sav"))
				$query = $CI->db->query("DELETE FROM files WHERE id = '$fileId'");
		}
	}	
	
	function returnFileName($fileId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM mojmojster.files WHERE mojmojster.files.id = '$fileId'");
		
		foreach ($query->result() as $row)
			return $row->filename;
		return false; 
	}
	
	function returnFileId($filename)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT id FROM mojmojster.files WHERE mojmojster.files.filename = '$filename'");
		foreach ($query->result() as $row)
			return $row->id;
		return false;
	}
	
	function hasRightToLoad($userId, $fileId)
	{	//TODO: IMPLEMENT SECURITY.
		return true;
	}
	
	function hasRightToDelete($userId, $fileId)
	{	//TODO: IMPLEMENT SECURITY.
		return true;
	}
	
	function hasRightToStore($userId, $fileId)
	{	//TODO: IMPLEMENT SECURITY.
		return true;
	}
	
	/*
	function loadFile($fileId)
	{	//TODO: IMPLEMENT SECURITY. SEE hasRightToLoad(...).
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM files WHERE id = '$fileId'");

		foreach ($query->result() as $row)
		{
			header('Content-Disposition: attachment; filename="'.$row->filename.'"');
			header("Content-Type: ".$row->type);
			readfile($CI->config->item('files_dir').$fileId.".sav");
		}
	}
	*/
	
	function deleteFile($fileId)
	{	//TODO: IMPLEMENT SECURITY. SEE hasRightToDelete(...)
		$filesDir = "savedfiles/";
		
		if ($fileId != -1)
		{
			$CI =& get_instance();
			unlink($CI->config->item('files_dir').$fileId.".sav");
			
			$query = $CI->db->query("DELETE FROM files WHERE id = '$fileId'");
		}
		
	}
	
}
?>