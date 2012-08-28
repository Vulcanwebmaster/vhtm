<?php

  error_reporting(E_ALL);
  ini_set("display_errors", true);
  
  function checkForError($text, $errors)
  {
     if (in_array($text, $errors))
        echo "<span style='color:#FF0000'>$text*</span>\n";
     else
       echo "$text*\n";
  }
  
  // Variablen initialisieren
  $company = $salutation  = $firstname = $lastname = $email     = $street = "";
  $city   = $telefon = $fax     = $messagetopic  = $message = "";
  
  $errorText = "";
  // Fehler-Array initialisieren
  $errors = array();
     
  // Script wurde vom Formular aufgerufen??
  if (isset($_POST['company']))
  {
     // Ja, also Ueberpruefung der Daten
  
     $validEmail = true;
     
     // config laden
     include ("./mailconfig.inc.php");
     
     if (! checkValue ($_POST['company'], $company))
       $errors[] = "Company";
       
     if (! checkValue ($_POST['firstname'], $firstname))
       $errors[] = "First Name";
       
     if (! checkValue ($_POST['lastname'], $lastname))
       $errors[] = "Last Name";
       
     if (! checkValue ($_POST['email'], $email))
       $errors[] = "E-Mail";
     
     if (! checkValue ($_POST['telefon'], $telefon))
       $errors[] = "Telefon";
       
     if (! checkValue ($_POST['message'], $message))
       $errors[] = "Message";
       
    // Keine Pflichtfelder
    $salutation = trim($_POST['salutation']);
    
    $city = stripslashes(trim($_POST['city']));
    
    $street = stripslashes(trim($_POST['street']));
    
    $fax = stripslashes(trim($_POST['fax']));
    
    $topic = isset($_POST['topic']) ? stripslashes(trim($_POST['topic'])) : "";
    
    if (!empty($email))
    {
       $validEmail = checkMail($email);
    }
    
    // Fehler vorhanden
    if (count($errors))
       $errorText = "Fields marked with an asterisk * are mandatory: " . implode(", ", $errors);
 
    // Check der MailAdresse erfolgreich?
    if (!$validEmail)
    {
       $errorText .= (strlen($errorText)) ? "<br /><br />" : "";
       $errorText .= "E-mail address invalid";
    }
    
    // Wenn jetzt kein Fehlertext vorhanden ist, kann die Mail raus,
    if (!strlen ($errorText))
    {
       // Keine Fehler gefunden
       // phpMailer laden
		include ("mail/class.phpmailer.php");		//include ("mailconfig.inc.php");
        
        // Texte laden
//        include ("./mailtext.inc.php");
       
        $mail            = new phpmailer();
        $mail->Subject   = PHPMAILER_SUBJECT;
        $mail->FromName  = PHPMAILER_FROM_NAME;
        $mail->PluginDir = PHPMAILER_PLUGIN_DIR;
        $mail->Host      = PHPMAILER_HOST;
        $mail->From      = PHPMAILER_FROM;
        $mail->Username  = PHPMAILER_USER;
        $mail->Password  = PHPMAILER_PASSWORD;
        $mail->IsHTML(true); 
        $mail->AddAddress(PHPMAILER_TO);
     // $mail->SMTPAuth  = true;
     // $mail->Mailer    = "smtp";
        $mail->Body    = $emailTemplate;
        $mail->AltBody = $txt;
       
		if($mail->Send())
          if(mail(PHPMAILER_TO,PHPMAILER_SUBJECT,$txt))
//        if(mail("info@vurman.com",PHPMAILER_SUBJECT,$txt))
        {
           header ("Location: thanks-contact.html");
           exit;
        }
        else
          $errorText = "Transmission error, please try again later";
      
    }
  }
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>

<title>Vurman - Spectrum Funds</title>

<meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption" />
<meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption" />
<meta name="generator" content="SuperHTML 7.0">

<style type="text/css">

table { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88; text-align:justify }

p { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }

body
{
 font-family:Arial,Verdana,Helvetica,sans-serif;
 color:#605C88;
 font-size:12px;
 background-color:#FFFFFF;
 margin:50px;
}

a:link, a:visited, a:active, a:hover
{
  text-decoration:none;
  color:#FF0000;
  font-size:13px;
}

a:active, a:hover
{
  color:#FF0000;
}

/* Das Menu */
#menu {
color:#FFFFFF;
text-align:center;
padding:10px 0px;
clear:right;
}

/* Der Inhalt */
#content {
background-color:#FFFFFF;
text-align:justify;
width:605px;
padding:0px;
}

fieldset { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }

*{
    padding:0;
}

fieldset{
    width:455px;
    margin:8px auto;
    padding:8px;
    background: #FFFFFF;
}

.dropdown{
    width:145px;
}

.contab{
    width:455px;
}

.btngrp{
    text-align:center;
}

#message{
    width:440px;
}

.norm{
    border:1px solid #7f9db9;
}

#error{
    border:1px solid red;
    padding: 2px;
}
.droperror{
    width:145px;
    border:1px solid red;
}
//--></style>
</head>

<body>



<div style="width:605px; margin:0px auto;text-align:left;  padding-left:15px; padding-top:40px; ">

<center>
<div align="center" style="margin:0px; background-image:url(images/map1.png); width:500px; height:285px; background-repeat:no-repeat; padding:0px; clear:both; border:0px solid #333; margin-bottom:0px;">
      <div style="position:relative; top:80px; border:0px solid #ccc; width:100px; left:-125px; color:red; clear:both; " >
      	<a href="http://24timezones.com/world_directory/current_new_york_time.php" style="text-decoration: none" target="_BLANK" title="local time New York"></a> <span id="tzTimeSpan_ee4e7dc2c49a935"></span>
    		<script type="text/javascript" src="http://24timezones.com/js/en/time_12_0_0.js"></script>
   			 <script src="http://24timezones.com/timescript/gettime.js.php?city=179&hourtype=12&showdate=0&showseconds=0&id=435814&elem=ee4e7dc2c49a935" language="javascript"></script>
         <br/>New York
      </div>
      <div style="position:relative; top:45px; border:0px solid #ccc; width:100px; left:0px; color:red; clear:both; " >
      	<a href="http://24timezones.com/world_directory/current_london_time.php" style="text-decoration: none" target="_BLANK" title="local time London"></a> <span id="tzTimeSpan_ee4e7dc5dd26efe"></span>
    		<script src="http://24timezones.com/timescript/gettime.js.php?city=136&hourtype=12&showdate=0&showseconds=0&id=435821&elem=ee4e7dc5dd26efe" language="javascript"></script>
        <br/>London
      </div>
      <div style="position:relative; top:30px; border:0px solid #ccc; width:100px; left:190px; color:red; clear:both; " >
      	<a href="http://24timezones.com/world_directory/current_tokyo_time.php" style="text-decoration: none" target="_BLANK" title="local time Tokyo"></a><span id="tzTimeSpan_ee4e7dc3df50e7b"></span>
		    <script src="http://24timezones.com/timescript/gettime.js.php?city=248&hourtype=12&showdate=0&showseconds=0&id=435819&elem=ee4e7dc3df50e7b" language="javascript"></script>
        <br/>Tokyo
      </div>
      <div style="position:relative; top:135px; border:0px solid #ccc; width:100px; left:235px; color:red; clear:both; " >
      	<a href="http://24timezones.com/world_directory/current_auckland_time.php" style="text-decoration: none" target="_BLANK" title="local time Auckland"></a> <span id="tzTimeSpan_ee4e7dc3385ae5f"></span>
    		<script src="http://24timezones.com/timescript/gettime.js.php?city=22&hourtype=12&showdate=0&showseconds=0&id=435817&elem=ee4e7dc3385ae5f" language="javascript"></script>
        <br/>Auckland
      </div>
     <!-- <img src="images/map1.png" style="clear:both"  />-->

</div>
</center>
</div>
<div align="center" style="width:auto;margin:auto; padding-top:20px;">
<span id="idTabstripContent_Body"><span id="idTabstripContent_Body2">TO ACCESS YOUR ACCOUNT ONLINE, CLICK </span><a style="font-size:12px" href="index.php" target="_blank"> HERE</a></span>
</div>
<!--<img src="ZEIT7.jpg" style="float:right;width:605px; height:185px;" />-->

<!--  Menu  -->
<div id="menu">
<!--<a class="menu_t" href="index.html" onfocus="blur()">|&nbsp;&nbsp;&nbsp;INDEX PAGE&nbsp;&nbsp;&nbsp;|</a>-->
</div>

<?php
  if (strlen($errorText))
     echo "<div align=\"center\" style=\"padding-bottom:10px;\"><span id='error'> $errorText </span></div>";
?>

<!-- Beginn Kontaktformular -->
<FORM ACTION="<?php echo $_SERVER['SCRIPT_NAME']; ?>" METHOD="post">
 <div>
  <fieldset>
   <legend>Personal Information</legend>
    <table class="contab">
     <tr>
      <td>
        <?php checkForError("Company", $errors); ?>
      </td>  
      <td><input class="norm" type="text" name="company" id="company" value="<?php echo $company; ?>"/></td>
     <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
             
 <tr>
  <td>Select</td>
   <td><select name="salutation" id="salutation" class="dropdown">
    <option value="" <?php if ($salutation == "") echo "selected=selected"; ?>>select</option>
     <option value="Mr" <?php if ($salutation == "Mr") echo "selected=selected"; ?>>Mr.</option>
      <option value="Mrs" <?php if ($salutation == "Mrs") echo "selected=selected"; ?>>Mrs.</option>
       </select></td>
        <td>&nbsp;</td>
         <td>&nbsp;</td>
          </tr>           
          <tr>
         <td><?php checkForError("First Name", $errors); ?></td>
        <td><input class="norm"  type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"/></td>
       <td><?php checkForError("Last Name", $errors); ?></td>
      <td><input class="norm"  type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>"/></td>
     </tr>
                               
 <tr>
  <td><?php checkForError("E-Mail", $errors); ?></td>
   <td><input class="norm"  type="text" name="email" id="email" value="<?php echo $email; ?>"/></td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
      </tr>
                                      
      <tr>
     <td>Street</td>
    <td><input class="norm"  type="text" name="street" id="street" value="<?php echo $street; ?>"/></td>
   <td>ZIP/City</td>
  <td><input class="norm"  type="text" name="city" id="city" value="<?php echo $city; ?>"/></td>
 </tr>
                                             
 <tr>
  <td><?php checkForError("Telefon", $errors); ?></td>
   <td><input class="norm"  type="text" name="telefon" id="telefon" value="<?php echo $telefon; ?>"/></td>
    <td>Fax</td>
     <td><input class="norm"  type="text" name="fax" id="fax" value="<?php echo $fax; ?>"/></td>
      </tr>  
       </table>
        </fieldset>
         </div>
                                                         
         <div class="btngrp">
        <fieldset>
       <legend>Message Topic</legend>
       <input name="messagetopic" type="radio" value="General_Inquiry" <?php if ($messagetopic == "General_Inquiry") echo "checked=checked"; ?>/>&nbsp;General Inquiry&nbsp;
       <input name="messagetopic" type="radio" value="Service_Feedback" <?php if ($messagetopic == "Service_Feedback") echo "checked=checked"; ?>/>&nbsp;Service Feedback&nbsp;
       <input name="messagetopic" type="radio" value="Suggestions_Complaints" <?php if ($messagetopic == "Suggestions_Complaints") echo "checked=checked"; ?>/>&nbsp;Suggestions / Complaints&nbsp;
        </fieldset>
         </div>
  
 <div>
  <fieldset>
   <legend><?php checkForError("Message", $errors); ?></legend>
    <textarea id="message" name="message" rows="7" cols="4"><?php echo $message; ?></textarea>
     </fieldset>
      </div>
      
        <div>
       <fieldset>
      <legend></legend>
     <input style="float:left;" type="submit" value="Send" />
    <input style="float:right;" type="reset" value="Reset" onclick="resetAll();" /> 
   </fieldset>
  <span style="clear:both;"></span>
 </div>
 
 <div>
  <fieldset>
   <legend>Important</legend>
    <center>Fields marked with an asterisk * are mandatory<br/>
   </fieldset>
  </div>
 </form>

 <br />

</body>
</html>