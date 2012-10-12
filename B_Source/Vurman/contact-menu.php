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
    
    $topic = isset($_POST['messagetopic']) ? stripslashes(trim($_POST['messagetopic'])) : "";
    
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
    
    $txt = $emailTemplate;
    $txt = str_replace('%company%',$company,$txt);
    $txt = str_replace('%firstName%',$firstname,$txt);
    $txt = str_replace('%lastName%',$lastname,$txt);
    $txt = str_replace('%email%',$email,$txt);
    $txt = str_replace('%phone%',$telefon,$txt);
    $txt = str_replace('%fax%',$fax,$txt);
    $txt = str_replace('%street%',$street,$txt);
    $txt = str_replace('%topic%',$topic,$txt);
    $txt = str_replace('%title%',$salutation,$txt);
    $txt = str_replace('%text%',$message,$txt);
    $txt = str_replace('%city%',$city,$txt);


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
//        if(mail("info@vurman.com",PHPMAILER_SUBJECT,$txt))
        {
           header ("Location: thanks-contact_m.htm");
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
<meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
<meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="styles.css" />

<style type="text/css">

table { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88; text-align:justify; }

p { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:10pt; color:#605C88 }

body
{
 font-family:Arial,Verdana,Helvetica,sans-serif;
 color:#605C88;
 font-size:12px;
 background-color:#FFFFFF;

}

a:link, a:visited, a:active, a:hover
{
  text-decoration:none;
  color:#FF0000;
  font-size:12px;
}

a:active, a:hover
{
  color:#FF0000;
}

/* Das Menu */
#menutop {
color:#FFFFFF;
text-align:center;
padding:10px 0px;
clear:right;
}

/* Der Inhalt */


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
#main_cont
{
	margin: auto;
	width: 1155px;
}
//--></style>
</head>

<body>

<center>
<div id="main_cont">

 <div id="title">
        <img src="ZEIT8.jpg" alt="" /></div>

<!--  Menu  -->
<div id="menutop">
</div>

<?php
  if (strlen($errorText))
     echo "<span id='error'> $errorText </span>\n";
?>
 <br>

 <div id="left">
            <div class="menucontainer">
                <p class="menutitle">
                    FUND SETTLEMENT</p>                    
                <a class="menu" href="transfer-rec.html">RECEIVE INSTRUCTION</a>    
                <a class="menu" href="transfer-del.html">DELIVERY INSTRUCTION</a>
                <a class="menu" href="stf.php">STOCK TRANSFER FORM</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN / SETTLED</p>                 
                <a class="menu" href=".html">PENDING TRANSFER(S)</a>
                <a class="menu" href=".html">SETTLED TRANSFER(S)</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="sub.html">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red.html">REDEMPTION ORDER</a>
                <a class="menu" href="http://www.perfect-funds-solutions.com/create.php?type=switch">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN / SETTLED</p>                
                <a class="menu" href=".html">PENDING TRADE(S)</a>
                <a class="menu" href=".html">EXECUTED TRADE(S)</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND DATABASE</p>
                <a class="menu" href="fund-db.php">FUND DATABASE</a>
            </div>
        </div>

    <div id="content">

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
    <option value="" <?php if ($salutation == "") echo "selected=selected"; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selection</option>
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
    <center>Fields marked with an asterisk * are mandatory </center><br/>
   </fieldset>
  </div>
 </form>
  </div>

 <div id="right">
            <div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRADE(S)</p>                
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    EXECUTED TRADE(S)</p>
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>
            </div>
            
            <div class="menucontainer">
                <p class="menutitle">
                    HELP DESK / SUPPORT</p>
                <a class="menu" href=".html" onfocus="blur()">HELP DESK</a>
                <a class="menu" href="chat-admin.html" onfocus="blur()">LIVE SUPPORT</a>   
                <a class="menu" href="shoutbox.html" onfocus="blur()">SHOUT BOX</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    LOGOUT</p>
                <a class="menu" href="logout.php" target="_top" onfocus="blur()">LOGOUT</a>
            </div>
          </div>          
        </div>
      </div>
</body>
</html>