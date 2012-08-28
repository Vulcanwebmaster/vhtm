<?php 
include('Mail.php'); 
include('Mail/mime.php'); 

$text = 'Text version of email'; 
$file = 'xmail.dtd'; 
$crlf = "\r\n"; 
$hdrs = array( 
              'From'    => 'you@yourdomain.com', 
              'Subject' => 'Test mime message' 
              ); 

$mime = new Mail_mime($crlf); 

$mime->setTXTBody($text); 
$mime->addAttachment($file, 'text/plain'); 

$body = $mime->get(); 
$hdrs = $mime->headers($hdrs); 

$mail =& Mail::factory('mail'); 
$mail->send('hrumos@gmail.com', $hdrs, $body); 
echo 'sent!';
?>