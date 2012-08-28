<?php
/*********************************************************************
    offline.php

    Offline page...modify to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: $
**********************************************************************/
require_once('client.inc.php');
if($cfg && !$cfg->isHelpDeskOffline()) { 
    @header('Location: index.php'); //Redirect if the system is online.
    include('index.php');
    exit;
}
?>
<html>
<head>
<title>Vurman - Spectrum Funds</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" rightmargin="0" topmargin="0">
<table width="60%" cellpadding="5" cellspacing="0" border="0">
	<tr<td>
        <p>
         <h4>OUR HELP DESK IS CURRENTLY OFFLINE</h4>
         
         Thank you for contacting us.<br>
         Our help desk is currently offline. Please check again later.
        </p>
    </td></tr>
</table>
</body>
</html>
