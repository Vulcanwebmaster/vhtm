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
  $firma = $anrede  = $vorname = $nachname = $email     = $strasse = "";
  $ort   = $telefon = $fax     = $betreff  = $nachricht = "";
  
  $errorText = "";
  // Fehler-Array initialisieren
  $errors = array();
     
  // Script wurde vom Formular aufgerufen??
  if (isset($_POST['firma']))
  {
     // Ja, also Überprüfung der Daten
  
     $validEmail = true;
     
     // config laden
     include ("./mailconfig.inc.php");
     
     if (! checkValue ($_POST['firma'], $firma))
       $errors[] = "Firma";
       
     if (! checkValue ($_POST['vorname'], $vorname))
       $errors[] = "Vorname";
       
     if (! checkValue ($_POST['nachname'], $nachname))
       $errors[] = "Name";
       
     if (! checkValue ($_POST['email'], $email))
       $errors[] = "E-Mail";
     
     if (! checkValue ($_POST['telefon'], $telefon))
       $errors[] = "Telefon";
       
     if (! checkValue ($_POST['nachricht'], $nachricht))
       $errors[] = "Nachricht";
       
    // Keine Pflichtfelder
    $anrede = trim($_POST['anrede']);
    
    $ort = stripslashes(trim($_POST['ort']));
    
    $strasse = stripslashes(trim($_POST['strasse']));
    
    $fax = stripslashes(trim($_POST['fax']));
    
    $betreff = isset($_POST['betreff']) ? stripslashes(trim($_POST['betreff'])) : "";
    
    if (!empty($email))
    {
       $validEmail = checkMail($email);
    }
    
    // Fehler vorhanden
    if (count($errors))
       $errorText = "Die mit * markierten Felder sind Pflicht: " . implode(", ", $errors);
 
    // Check der MailAdresse erfolgreich?
    if (!$validEmail)
    {
       $errorText .= (strlen($errorText)) ? "<br /><br />" : "";
       $errorText .= "E-Mail Adresse ungültig";
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
           header ("Location: danke-kontakt.htm");
           exit;
        }
        else
          $errorText = "Fehler beim Versenden, versuchen Sie es bitte später noch einmal.";
      
    }
  }
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>

<title>Kontaktformular Perfect Funds Solutions</title>

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

#nachricht{
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

<p><a href="index.html" target="_top"><img src="ZEIT8.jpg" border="0" alt="Hier klicken um zur Startseite zur&uuml;ckzukehren"></a></p>
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
   <legend>Pers&ouml;nliche Daten</legend>
    <table class="contab">
     <tr>
      <td>
        <?php checkForError("Firma", $errors); ?>
      </td>  
      <td><input class="norm" type="text" name="firma" id="company" value="<?php echo $firma; ?>"/></td>
     <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
             
 <tr>
  <td>Anrede</td>
   <td><select name="anrede" id="salutation" class="dropdown">
    <option value="" <?php if ($anrede == "") echo "selected=selected"; ?>>Bitte ausw&auml;hlen</option>
     <option value="Herr" <?php if ($anrede == "Herr") echo "selected=selected"; ?>>Herr</option>
      <option value="Frau" <?php if ($anrede == "Frau") echo "selected=selected"; ?>>Frau</option>
       </select></td>
        <td>&nbsp;</td>
         <td>&nbsp;</td>
          </tr>           
          <tr>
         <td><?php checkForError("Vorname", $errors); ?></td>
        <td><input class="norm"  type="text" name="vorname" id="vorname" value="<?php echo $vorname; ?>"/></td>
       <td><?php checkForError("Name", $errors); ?></td>
      <td><input class="norm"  type="text" name="nachname" id="name" value="<?php echo $nachname; ?>"/></td>
     </tr>
                               
 <tr>
  <td><?php checkForError("E-Mail", $errors); ?></td>
   <td><input class="norm"  type="text" name="email" id="email" value="<?php echo $email; ?>"/></td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
      </tr>
                                      
      <tr>
     <td>Strasse</td>
    <td><input class="norm"  type="text" name="strasse" id="strasse" value="<?php echo $strasse; ?>"/></td>
   <td>PLZ/Ort</td>
  <td><input class="norm"  type="text" name="ort" id="ort" value="<?php echo $ort; ?>"/></td>
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
       <legend>Meine Anfrage betrifft</legend>
       <input name="betreff" type="radio" value="Datenbank" <?php if ($betreff == "Datenbank") echo "checked=checked"; ?>/>Datenbank&nbsp;
       <input name="betreff" type="radio" value="Transfer" <?php if ($betreff == "Transfer") echo "checked=checked"; ?>/>Transfer&nbsp;
       <input name="betreff" type="radio" value="Zeichnung" <?php if ($betreff == "Zeichnung") echo "checked=checked"; ?>/>Zeichnung&nbsp;
       <input name="betreff" type="radio" value="R&uuml;cknahme" <?php if ($betreff == "R&uuml;cknahme") echo "checked=checked"; ?>/>R&uuml;cknahme&nbsp;
   </fieldset>
  </div>
  
 <div>
  <fieldset>
   <legend><?php checkForError("Nachricht", $errors); ?></legend>
    <textarea id="nachricht" name="nachricht" rows="7" cols="4"><?php echo $nachricht; ?></textarea>
     </fieldset>
      </div>
      
        <div>
       <fieldset>
      <legend></legend>
     <input style="float:left;" type="submit" value="senden" />
    <input style="float:right;" type="reset" value="löschen" onclick="resetAll();" /> 
   </fieldset>
  <span style="clear:both;"></span>
 </div>
 
 <div>
  <fieldset>
   <legend>Wichtig</legend>
    Die mit * gekennzeichneten Felder sind Pflichtfelder<br/>
   </fieldset>
  </div>
 </form>
 <br>
</body>
</html>