<?php if (!defined('VB_ENTRY')) die('Access denied.');

/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.0.5 
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2010 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # 
|| #################################################################### ||
\*======================================================================*/

/**
 * @package vBulletin
 * @subpackage Search
 * @author Michael Henretty, vBulletin Development Team
 * @version $Id: newcmscomment.php 35848 2010-03-17 19:38:45Z mhenretty $
 * @since $Date: 2010-03-17 12:38:45 -0700 (Wed, 17 Mar 2010) $
 * @copyright vBulletin Solutions Inc.
 */

require_once DIR . '/packages/vbforum/search/searchcontroller/newpost.php';

/**
 * Search Controller for CMS Comments
 *
 * @see vB_Search_Result
 * @package vBulletin
 * @subpackage Search
 */
class vBCms_Search_SearchController_NewCmsComment extends vBForum_Search_SearchController_NewPost
{

}

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 35848 $
|| ####################################################################
\*======================================================================*/