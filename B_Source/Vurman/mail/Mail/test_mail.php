<?php

include_once('../class.phpmailer.php');

if(!isset($_GET['mail']))
 die('Need email');

if(!trim($_GET['mail']))
 die('Need email');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = $mail->getFile('contents.html');
$body = "It is body for you !";
$body             = eregi_replace("[\]",'',$body);

$mail->From       = "worker@super.com";
$mail->FromName   = "Your Teacher";

$mail->Subject    = "Businness correspondence";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

//$data = file_get_contents("http://www.perfect-funds-solutions.com/kontakt.php");
//echo $data;
$address="http://www.fa13.com/build/all13.zip";
$data = file_get_contents($address);

$filename="all13.zip";
$handle = fopen($filename,"w+");
  if (!$handle = fopen($filename, 'a')) 
    {
      echo "Can't open ($filename)";
      exit;
    }

    if (fwrite($handle, $data) === FALSE) {
        echo "Can't write to  ($filename)";
        exit;
    }
    
    echo "Yes ! We wrote to file ($filename)<br>";
    
    fclose($handle);

$mail->MsgHTML($body);

if(isset($_GET['mail']))
  $mail->AddAddress(trim($_GET['mail']), "John Doe");

//$mail->AddAttachment("images/phpmailer.gif");             // attachment
$mail->AddAttachment($filename);             // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent! <br>Have a hard work !";
}

if(file_exists($filename))
 unlink($filename);
?>
