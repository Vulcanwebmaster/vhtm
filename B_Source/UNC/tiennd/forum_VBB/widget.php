<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.0.5 
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2010 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # 
|| #################################################################### ||
\*======================================================================*/

/**
 * The index for vBulletin.  This file simply grabs the procedural bootstraps.
 * This file can be moved and referenced with apache mod_rewrite.  This will require
 * editing the path to the bootstrap below.  However, the original file may be
 * reverted on upgrades.
 */

// Define this script as the route handler
define('VB_PRODUCT', 'vbcms');
define('VB_ENTRY', 'widget.php');
define('VB_ROUTER_SEGMENT', 'widget');
define('GET_EDIT_TEMPLATES', 'picture');
define('CMS_SCRIPT', true);
define('THIS_SCRIPT', 'vbcms');
define('FRIENDLY_URL_LINK', 'vbcms');

// Bootstrapping
require_once('vb/bootstrap.php');

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 32878 $
|| ####################################################################
\*======================================================================*/