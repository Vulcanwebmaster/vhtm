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
 * @version $Id: cmscomment.php 35848 2010-03-17 19:38:45Z mhenretty $
 * @since $Date: 2010-03-17 12:38:45 -0700 (Wed, 17 Mar 2010) $
 * @copyright vBulletin Solutions Inc.
 */

require_once DIR . '/packages/vbforum/search/indexcontroller/post.php';

/**
 * Index controller for CMS comments
 *
 * @package vBulletin
 * @subpackage Search
 */
class vBCms_Search_IndexController_CmsComment extends vBForum_Search_IndexController_Post
{
	/** override post directive so that we only index cms comments  **/
	protected $EXCLUDE_CMS_COMMENTS = false;

	/** Package name  **/
	protected $package = 'vBCms';

	/** Class name  **/
	protected $class = 'CmsComment';

	/** Class name  **/
	protected $groupclass = 'Article';

	/**
	 * Constructor: set the content types
	 */
	public function __construct()
	{
		$this->contenttypeid = vB_Search_Core::get_instance()->get_contenttypeid($this->package, $this->class);
		$this->groupcontenttypeid = vB_Search_Core::get_instance()->get_contenttypeid($this->package, $this->groupclass);
	}
	
	/**
	 * Index a thread
	 *
	 * By default this will look up all of the posts in a thread and calls the core
	 * indexer for each one
	 *
	 * @param int $id the thread id
	 */
	public function index_thread($id)
	{
		global $vbulletin;

		$thread = vB_Legacy_Thread::create_from_id($id);
		
		// make sure thread comes from the CMS comment forum 
		if ($thread->get_field('forumid') != $vbulletin->options['vbcmsforumid'])
		{
			return;
		}

		$set = $vbulletin->db->query_read("
			SELECT post.* FROM " . TABLE_PREFIX . "post AS post WHERE threadid = " . intval($id)
		);

		$indexer = vB_Search_Core::get_instance()->get_core_indexer();
		while ($row = $vbulletin->db->fetch_array($set))
		{
			$post = vB_Legacy_Post::create_from_record($row, $thread);
			$fields = $this->post_to_indexfields($post);
			if ($fields)
			{
				$indexer->index($fields);
			}
		}
	}


	/**
	 * Convert a post object into the fieldset for the indexer
	 * for CMS comments, changing group associates from thread to article
	 *
	 * @param post object
	 * 
	 * @return array the index fields
	 */
	protected function post_to_indexfields($post)
	{
		// do not index first posts of cms comment threads, because these are not actually
		// comments but rather a place holder in the forum to represent the comment thread
		if ($post->get_field('postid') == $post->get_thread()->get_field('firstpostid'))
		{
			return false;
		}
		
		$fields = parent::post_to_indexfields($post);
		
		// make sure post indexer returned valid index fields
		if (is_array($fields))
		{
			// cms comments are grouped by article, and not thread like normal posts
			// so change the post group index fields to use article fields instead
			$threadid = $post->get_thread()->get_field('threadid');
			$group_row = vB::$vbulletin->db->query_first("
				SELECT u.username, n.userid, a.contentid, i.title, n.publishdate
				FROM " . TABLE_PREFIX . "cms_article a
				LEFT JOIN " . TABLE_PREFIX . "cms_node n on n.contentid = a.contentid
	  			LEFT JOIN " . TABLE_PREFIX . "cms_nodeinfo i on i.nodeid = n.nodeid
	  			LEFT JOIN " . TABLE_PREFIX . "user u on u.userid = n.userid
				WHERE i.associatedthreadid = $threadid 
					AND n.contenttypeid = " . $this->groupcontenttypeid . "
					AND n.nosearch = 0
			");
			
			// if we can find no article, (i.e. if nosearch is true, etc.)
			// we skip the indexing of this comment
			if (!$group_row)
			{
				return false;
			}
			
			$fields['groupcontenttypeid'] = $this->groupcontenttypeid;
			$fields['groupid'] = $group_row['contentid'];
			$fields['groupuserid'] = $group_row['userid'];
			$fields['groupdateline'] = $group_row['publishdate'];
			$fields['groupusername'] = $group_row['username'];
			$fields['grouptitle'] = $group_row['title'];
		}
		
		return $fields;
	}
}

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 35848 $
|| ####################################################################
\*======================================================================*/