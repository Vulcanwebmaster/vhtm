<?php
session_start();
if (!isset($time)) $time = 0;
if (strlen($_POST['newmsg'] > 2))
{
   // MySQL-Daten hier aendern
   $hdlDB = mysql_connect('localhost', 'root', '');
   $curTime = time();
   $strSQL = "INSERT INTO chat (time, data, sender)
              VALUES ('$curTime', $newmsg', '$sender')";
   // Name der Datenbank hier aendern
   mysql_db_query('chat', $strSQL, $hdlDB);
   session_register('time');
}  /* end if */

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman Fund Services Ltd</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption" />
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="Stylesheet" href="styles1.css" />
</head>
<body>
    <div id="main_center">
     <div id="title">
      <img src="ZEIT8.jpg" alt="" />
     </div>

<script language="JavaScript">
   <?php
    if (is_array($arrMsg))
    {
       foreach($arrMsg as $strLine)
          echo "top.msg[top.msg.length]=\"$strLine\"";
    }
    ?>
    top.show.location.reload();
    </script>
        <form action="<?php echo $PHP_SELF; ?>" method="post">
     <select name="sender" size="1">
      <option value="Admin" <?php $sender == 'Admin' ? print 'selected' : print ''; ?>>Admin
      <option value="Client" <?php $sender == 'Client' ? print 'selected' : print ''; ?>>Client
     </select>
     's input:
     <input type="Text" name="newmsg" size="40">
     <input type="Submit" value="send">
    </form>
   </body>
  </html>           