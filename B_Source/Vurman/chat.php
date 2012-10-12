<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="styles.css" />
</head>
<body>
    <div id="main_cont">
        <div id="title">
           <?php 

			if($_SESSION['usertype']=="user")

			{

			?>
            	<img src="logo_client.jpg" alt="" /></div>
            <?php 
			} else {
            ?>
            
            	<img src="logo.jpg" alt="" /></div>
            <?php 
            }
            ?>
        <div id="left">
            <?php require_once('include/menu-left-client.php'); ?>
        </div>
        
        <div id="content">

        <br />
        <br />

<iframe style='overflow:hidden;width:350px;height:350px;' frameborder='0' border='0' src="http://chat.zoho.com/mychat.sas?u=41d14d7e110b2a138570deb54e9fc60255031d9c002375ef&chaturl=Vurman%20Fund%20Services&V=0000ff-ffffff-ffffff-0000ff-Help%20Desk%20/%20Live%20Support"></iframe></div>    
        
        <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
          </div>          
        </div>
      </div>
</body>
</html>