<?php
$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "khongcopass";
$DB_DATABASE = "mojmojster";	
$FILES_DIR = "savedfiles/";

//TODO: IMPLEMENT SECURITY. SEE hasRightToLoad(...).

if (isset($_REQUEST['id']))
{
	$fileId = $_REQUEST['id'];

	if (is_numeric($fileId))
	{
		mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD);
		mysql_select_db($DB_DATABASE);
					
		$query = mysql_query("SELECT * FROM files WHERE id = '$fileId'");
		if (mysql_num_rows($query) > 0)
		{
			$fileName = mysql_result($query,0,3);
			$fileType = mysql_result($query,0,2);
			header('Content-Disposition: attachment; filename="'.$fileName.'"');
			header("Content-Type: ".$fileType);
			readfile($FILES_DIR.$fileId.".sav");
		}
		mysql_close();
	}
}

?>