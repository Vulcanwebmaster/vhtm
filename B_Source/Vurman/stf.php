<?php 
include('config.php');
include('mailconfig.inc.php');
include('classes/client.class.php');
include($templates.'menu1.php');  
?>
<div id="content">            

<?php

if(!isset($_FILES['scan']['size'])){
?>
1. COMPLETE THE STF&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;2. PRINT THE COMPLETED STF&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;3. SCAN AND SUBMIT THE PRINTED STF<br /><br />
            <iframe src="http://www.icsasoftware.com/news/stfv2.pdf" width="605" height="500">
            </iframe>
<FORM action="" enctype="multipart/form-data" method="post"><br />
   Scanned STF:&nbsp;&nbsp;&nbsp;<INPUT type="file" name="scan" value="search document">&nbsp;&nbsp;&nbsp;<INPUT type="submit" value="send" name="button"> 
</FORM>

<br />
<br />

<?php }
else {

if($_FILES['scan']['tmp_name']<1000000)
if(is_uploaded_file($_FILES['scan']['tmp_name'])) 
{


  if(!copy($_FILES['scan']['tmp_name'], ".\\tmp\\".$_FILES['scan']['name']))
  echo 'Couldnt copy file!';
  $attachment = ".\\tmp\\".$_FILES['scan']['name'];
  include('Mail.php'); 
  include('mime.php'); 

$clnt = new Client;
$data = $clnt->getData($_SESSION['login']);

$text = 'THE STF HAS BEEN COMPLETED AND SIGNED
 Client name is '.$data['name'].', email is '.$data['email']; 
$crlf = "\r\n"; 
$hdrs = array( 
              'From'    => 'you@yourdomain.com', 
              'Subject' => 'New STF' 
              ); 

$mime = new Mail_mime($crlf); 

$mime->setTXTBody($text); 
$mime->addAttachment($attachment, 'text/plain'); 

$body = $mime->get(); 
$hdrs = $mime->headers($hdrs); 

$mail =& Mail::factory('mail'); 
$mail->send(PHPMAILER_TO, $hdrs, $body); 

echo 'THE STF HAS BEEN SENT SUCCESSFULLY!';

}
if($_FILES['scan']['tmp_name']>=1000000)
  echo 'SORRY, BUT THE FILE IS TOO BIG!';

}


include($templates.'footer.php');  
?>
