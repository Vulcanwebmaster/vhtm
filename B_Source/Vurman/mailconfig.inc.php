<?php
  /*
        mailconfig.inc.php
     */
  // Pfadangaben, hier anpassen, wenn das Script bzzw. die Verzeichnisse 
  // nicht im Hauptverzeichnis liegen
  define ('PEAR_PATH', $_SERVER['DOCUMENT_ROOT'] . "/pear");
  define ('PHPMAILER_PATH', $_SERVER['DOCUMENT_ROOT'] . "phpmailer");
  define ('PHPMAILER_PLUGIN_DIR', "./phpmailer/"); 
  
  // Angaben fuer den Mailversand, hier alle defines anpassen !!!!  
  
  // SMTP-Server, ueber den die Mail gesendet werden soll
  define ('PHPMAILER_HOST', "vurman.com"); 
  // SMTP-Benutzer
  define ('PHPMAILER_USER', "web1244");
  // SMTP-Password
  define ('PHPMAILER_PASSWORD', "aMAJDD67");
  // Absender
  define ('PHPMAILER_FROM', "???");
  // Absender-Name
  define ('PHPMAILER_FROM_NAME', "Kontaktformular <???>");
  // Empfaenger
  define ('PHPMAILER_TO', "info@vurman.com");
  // Betreff
  define ('PHPMAILER_SUBJECT', "Nachricht aus Kontaktformular");

  $txt = stripslashes(trim($_REQUEST['message']));

  $emailTemplate = 'Hi, you have got a new contact mail

 The content is next:

 Company: %company%
 From : %title% %firstName% %lastName% 
 Contact email: %email%
 Phone: %phone%
 Address: %city% %street% 
 Fax: %fax%
 Subject: %topic%
 Message : 
 %text%

 ';

  
  // Funktion zum �berpr�fen leerer Eintr�ge 
  function checkValue($value, &$resultValue)
  {
     $result = false;
     
     $temp = trim (stripslashes($value));
     
     if (!empty($temp))
     {
        $resultValue = $temp;
        
        $result = true;
     }
     
     return $result;
  }
  
  // Fumtion zur �berpr�fung einer eMail-Adresse
  function checkMail($email)
  {
     // Pear-Klassen laden             
     require_once ("PEAR.php");
     include ("Mail/RFC822.php");
     
     // Jetzt die g�ltigkeit der Mail-Adresse pruefen
     $structure = Mail_RFC822::parseAddressList($email,'',false,true);
     if(PEAR::isError($structure))
        $result = false;
     else
        $result = true;
        
     return $result;
  }
  
  // Pfade setzen
  $path = ini_get("include_path");
  $path .= PATH_SEPARATOR . PEAR_PATH . PATH_SEPARATOR . PHPMAILER_PATH;
  ini_set("include_path", $path);
?>
