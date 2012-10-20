<?php if (!defined('VB_ENTRY')) die('Access denied.');
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
 * Test Widget Item
 *
 * @package vBulletin
 * @author Edwin Brown, vBulletin Development Team
 * @version $Revision: 37641 $
 * @since $Date: 2010-06-22 11:05:20 -0700 (Tue, 22 Jun 2010) $
 * @copyright vBulletin Solutions Inc.
 */
class vBCms_Item_Widget_TagCloud extends vBCms_Item_Widget
{
	/*Properties====================================================================*/

	/**
	 * A package identifier.
	 *
	 * @var string
	 */
	protected $package = 'vBCms';

	/**
	 * A class identifier.
	 *
	 * @var string
	 */
	protected $class = 'TagCloud';

	/** The default configuration **/
	protected $config = array(
		'type'    => 'usage',
		'cache_ttl'    => 5,
		'template_name' => 'vbcms_widget_tagcloud_page',
	);

}

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 37641 $
|| ####################################################################
\*======================================================================*/