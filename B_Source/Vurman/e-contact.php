<?php

//  var_dump($_POST);  

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
  $company = $salutation = $firstname = $lastname = $email   = $street = "";
  $city    = $phone      = $fax       = $subject  = $comment = "";
  
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
       $errors[] = "E-mail";
     
     if (! checkValue ($_POST['phone'], $phone))
       $errors[] = "Phone";
       
     if (! checkValue ($_POST['comment'], $comment))
       $errors[] = "Comment";
       
    // Keine Pflichtfelder
    $salutation = trim($_POST['salutation']);
    
    $city = stripslashes(trim($_POST['city']));
    
    $street = stripslashes(trim($_POST['street']));
    
    $fax = stripslashes(trim($_POST['fax']));
    
    $subject = isset($_POST['subject']) ? stripslashes(trim($_POST['subject'])) : "";
    
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
//        include ("phpmailer/class.phpmailer.php");
        
        // Texte laden
//        include ("./mailtext.inc.php");
/*        
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
        $mail->Body    = $html;
        $mail->AltBody = $txt;
        */
//        if($mail->Send())
          if(mail(PHPMAILER_TO,PHPMAILER_SUBJECT,$txt))
//        if(mail("info@perfect-business-solutions.com",PHPMAILER_SUBJECT,$txt))
        {
           header ("Location: thanks-contact.htm");
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

<title>contact form Perfect Funds Solutions</title>

<META name="keywords" content="Kontaktformular, TA, Transfer-Agent, Hedgefonds, Offshorefonds, Settlement, Zeichnung, R&uuml;cknahme">
<META name="description" content="Kontaktformular, TA, Transfer-Agent, Hedgefonds, Hedgefonds, Offshorefonds, Settlement, Zeichnung, R&uuml;cknahme">
<meta name="generator" content="SuperHTML 7.0">

<style type="text/css">
a:link { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#D02433; text-decoration:none; border-style:none }
a:visited { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#D02433; text-decoration:none; border-style:none }
a:hover { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; text-decoration:none }
a:active { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#D02433; text-decoration:none; border-style:none }
body { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }
table { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88; text-align:justify }
p { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }
fieldset { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }

*{
    padding:0;
}

fieldset{
    width:455px;
    margin:8px auto;
    padding:8px;
    background: #ffffff;
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

#comment{
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
-->
</style>
</head>

<body>

<center>

<p><a href="index.html" target="_top"><img src="ZEIT8.jpg" border="0" alt="Click on this image to return to the index page"></a></p>
<br>

<?php
  if (strlen($errorText))
     echo "<span id='error'> $errorText </span>\n";
?>
 <br>
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
  <td>Salutation</td>
   <td><select name="salutation" id="salutation" class="dropdown">
    <option value="" <?php if ($salutation == "") echo "selected=selected"; ?>>please select</option>
     <option value="Mr" <?php if ($salutation == "Herr") echo "selected=selected"; ?>>Mr</option>
      <option value="Mrs" <?php if ($salutation == "Frau") echo "selected=selected"; ?>>Mrs</option>
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
  <td><?php checkForError("E-mail", $errors); ?></td>
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
  <td><?php checkForError("Phone", $errors); ?></td>
   <td><input class="norm"  type="text" name="phone" id="phone" value="<?php echo $phone; ?>"/></td>
    <td>Fax</td>
     <td><input class="norm"  type="text" name="fax" id="fax" value="<?php echo $fax; ?>"/></td>
      </tr>  
       </table>
        </fieldset>
         </div>
                                                         
         <div class="btngrp">
        <fieldset>
       <legend>Message Topic</legend>
       <input name="subject" type="radio" value="Database" <?php if ($subject == "Database") echo "checked=checked"; ?>/>Database&nbsp;
       <input name="subject" type="radio" value="Transfer" <?php if ($subject == "Transfer") echo "checked=checked"; ?>/>Transfer&nbsp;
       <input name="subject" type="radio" value="Subscription" <?php if ($subject == "Subscription") echo "checked=checked"; ?>/>Subscription&nbsp;
       <input name="subject" type="radio" value="Redemption" <?php if ($subject == "Redemption") echo "checked=checked"; ?>/>Redemption&nbsp;
   </fieldset>
  </div>
  
 <div>
  <fieldset>
   <legend><?php checkForError("comment", $errors); ?></legend>
    <textarea id="comment" name="comment" rows="7" cols="4"><?php echo $comment; ?></textarea>
     </fieldset>
      </div>
      
        <div>
       <fieldset>
      <legend></legend>
     <input style="float:left;" type="submit" value="submit" />
    <input style="float:right;" type="reset" value="reset" onclick="resetAll();" /> 
   </fieldset>
  <span style="clear:both;"></span>
 </div>
 
 <div>
  <fieldset>
   <legend>Important</legend>
    Fields marked with an asterisk * are mandatory<br/>
   </fieldset>
  </div>
 </form>
<br>

 </body>
</html>