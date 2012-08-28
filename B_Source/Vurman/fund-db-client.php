<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
  <head>
   <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="css/styles.css" />
</head>


<body>
 <div id="main_cont">
  <div id="title">
   <img src="ZEIT8.jpg" alt="" /></div>
    <div id="left">
             <?php require_once('include/menu-left-client.php'); ?>
        </div>
        
        <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
          </div>
     
 <div id="content">  

<form name="search_form" method="post" action="/fund-db.php?show_fund=1">
<table width="605px" border="0">
  <tr>
    <td width="100px">I S I N - C O D E</td>
    
    <td width="100px"><label><div class="roundcorner_div"><input type="text" class="roundcorner_textbox" name="ISIN" id="ISIN"/></div></label></td>

    <td><input name="search_form_submit" type="submit" value="search"/></td>
    <td width="250px">&nbsp;</td>
  </tr>
</table>
</form>

     </div>
     </div>
 </body>
</html>