<?php

 function get_fund($ISIN)
 {
        $ISIN = mysql_real_escape_string($ISIN);
 	$qr = mysql_query("SELECT * FROM fund WHERE ISIN='".$ISIN."' ");
	if ( mysql_error() ) echo mysql_error();
	if ( mysql_num_rows($qr) == 0 ) return NULL;
	return mysql_fetch_object($qr);
 }

function show($var) 
{
  if(trim($_POST[$var])) return 'value="'.trim($_POST[$var]).'"';
  return '';;
}


function checkForError($text, $result, $output)
{
  if (in_array(($text), $result))
    echo "<span style='color:#FF0000'>$output</span>";
  else
    echo "$output";
}

function exist($var) 
{
  if(isset($var))
  {
  if(trim($var) !== '')
    return TRUE;
  }
  else
  	return FALSE;
}
function logged() 
{
  if(isset($_SESSION['login']))
  {
    return TRUE;
  }
  else
  	return FALSE;
}
function loggedAdmin() 
{
  if(isset($_SESSION['admin']))
  {
  	if($_SESSION['admin'] == aPass)
    	return TRUE;
  }
  else
  	return FALSE;
}

function loginAdmin() 
{
  if(isset($_POST['username']))
  {
	  if(isset($_POST['password']))
	  {
		  if(isset($_POST['button']))
		  {
			  if(trim($_POST['username']) == aLogin)
			  {
			  	if(trim($_POST['password']) == aPass)
				{
					$_SESSION['admin'] = aPass;
					
					$_SESSION['login'] = "1";
				    $_SESSION['usertype'] = "Super Admin";
				}
			  }
		  }
	  }
  }
}

function login() 
{
  if(isset($_POST['username']))
  {
	  if(isset($_POST['password']))
	  {
	  if(isset($_POST['button']))
	  if(mysql_ping())
	  {
			$query = "SELECT * FROM user_setup WHERE login_id ='".mysql_real_escape_string($_POST['username'])."' AND password='".mysql_real_escape_string($_POST['password'])."'";
			//echo $query;
			$res = mysql_query($query);
		
			if(mysql_num_rows($res))
			{
				  $resx=mysql_fetch_assoc($res);
				  $_SESSION['login'] = $resx['id'];
				  $_SESSION['name']=$resx['first_name'];
				  $_SESSION['usertype'] = $resx['role'];
				  $_SESSION['gender']=$resx['gender'];
			}
	  }
  }
  }
}

function getAccounts($id = false) 
{
  $accounts= array();
  $query = $id? " SELECT id, name FROM custody_ac WHERE id_client = '$id'" :"SELECT id, name FROM custody_ac WHERE id_client = '".$_SESSION['login']."'";
  $qres=mysql_query($query);
  while($row = mysql_fetch_assoc($qres))
    $accounts[] = $row;
  return($accounts);
}
?>