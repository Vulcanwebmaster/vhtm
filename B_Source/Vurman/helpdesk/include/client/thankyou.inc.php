<?php
if(!defined('OSTCLIENTINC') || !is_object($ticket)) die('Kwaheri rafiki!'); //Say bye to our friend..

//Please customize the message below to fit your organization speak!
?>
<div>
    <?if($errors['err']) {?>
        <p align="center" id="errormessage"><?=$errors['err']?></p>
    <?}elseif($msg) {?>
        <p align="center" id="infomessage"><?=$msg?></p>
    <?}elseif($warn) {?>
        <p id="warnmessage"><?=$warn?></p>
    <?}?>
</div>
<div style="margin:5px 100px 100px 0;">
    <?=Format::htmlchars($ticket->getName())?>,<br/ >
    <p>
     THANK YOU!<br/ ><br/ >
     YOUR INQUIRY HAS BEEN RECEIVED AND IS BEING PROCESSED. CLIENT SUPPORT WILL CONTACT YOU WITHIN 24 HOURS.</p>
          
    <?if($cfg->autoRespONNewTicket()){ ?>
    <p>AN E-MAIL WITH THE TICKET# HAS BEEN SENT TO <b><?=$ticket->getEmail()?></b>.
        TO CHECK THE CURRENT STATUS ON YOUR INQUIRY, YOU NEED THE TICKET# AND E-MAIL ADDRESS. 
    </p>
    <p>
     IF YOU WOULD LIKE TO SEND ADDITIONAL INFORMATION REGARDING THE SAME ISSUE, SIMPLY FOLLOW THE INSTRUCTIONS IN THE E-MAIL.
    </p>
    <?}?>
    <p>THANK YOU<br /><br />SUPPORT TEAM</p>
</div>
<?
unset($_POST); //clear to avoid re-posting on back button??
?>
