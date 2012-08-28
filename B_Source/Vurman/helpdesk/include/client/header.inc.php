<?php
$title=($cfg && is_object($cfg))?$cfg->getTitle():'osTicket :: Support Ticket System';
header("Content-Type: text/html; charset=UTF-8\r\n");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?=Format::htmlchars($title)?></title>
    <link rel="stylesheet" href="./styles/main.css" media="screen">
    <link rel="stylesheet" href="./styles/colors.css" media="screen">
</head>
<body>
<div id="container">
    <div id="header">
        <a id="logo" href="index.php"><img src="./images/logo2.jpg" border=0 alt="Support Center"></a>
        <p><span>SUPPORT TICKET</span> SYSTEM</p>
    </div>
    <ul id="nav">
         <?                    
         if($thisclient && is_object($thisclient) && $thisclient->isValid()) {?>
         <li><a class="log_out" href="logout.php">LOG OUT</a></li>
         <li><a class="my_tickets" href="tickets.php">MY TICKET(S)</a></li>
         <?}else {?>
         <li><a class="ticket_status" href="tickets.php">TICKET STATUS</a></li>
         <?}?>
         <li><a class="new_ticket" href="open.php">NEW TICKET</a></li>
         <li><a class="home" href="index.php">HOME</a></li>
    </ul>
    <div id="content">
