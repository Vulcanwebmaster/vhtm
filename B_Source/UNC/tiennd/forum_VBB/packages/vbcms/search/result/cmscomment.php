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
 * @version $Id: cmscomment.php 37602 2010-06-18 18:37:15Z ksours $
 * @since $Date: 2010-06-18 11:37:15 -0700 (Fri, 18 Jun 2010) $
 * @copyright vBulletin Solutions Inc.
 */

/*
require_once (DIR . '/vb/search/result.php');
include_once DIR . '/packages/vbcms/item/content/article.php';
require_once (DIR . '/vb/search/indexcontroller/null.php');
*/

require_once DIR . '/packages/vbforum/search/result/post.php';

/**
 * Result Implementation for CMS Comments
 *
 * @see vB_Search_Result
 * @package vBulletin
 * @subpackage Search
 */
class vBCms_Search_Result_CmsComment extends vBForum_Search_Result_Post
{
	/** Article Search Result Object  **/
	protected $article;

	/**
	 * creates vBCms_Search_Result_CmsComment result object
	 * given search results from post and article
	 *
	 * @param vBCms_Search_Result_Post search results
	 * @param vBCms_Search_Result_Article search results
	 *
	 * @return vBCms_Search_Result_CmsComment
	 */
	public static function create_from_object($post = null, $article = null)
	{
		if ($post)
		{
			$item = new vBCms_Search_Result_CmsComment($post);
			$item->article = $article;
			return $item;
		}
		else
		{
			return new vB_Search_Result_Null();
		}
	}


	/**
	 * return the contenttype id of cms comment
	 *
	 * @return string html of the rendered template
	 */
	public function get_contenttype()
	{
		return vB_Search_Core::get_instance()->get_contenttypeid('vBCms', 'CmsComment');
	}

	/**
	 * returns the search results for the parent article of this comment
	 *
	 * @return vBCms_Search_Result_Article
	 */
	public function get_article()
	{
		return $this->article;
	}


	/**
	 * function to return the rendered html for this result
	 *
	 * @param object legacy user object
	 * @param object criteria object
	 * @param string override default template name
	 *
	 * @return string html of the rendered template
	 */
	public function render($current_user, $criteria, $template_name = '')
	{
		global $vbulletin, $vbphrase, $show;

		fetch_phrase_group('search');

		// grab data
		$post = $this->get_post()->get_record();
		$article = $this->article->get_record();

		// create template
		if (!strlen($template_name)) {
			$template_name = 'search_results_cmscomment';
		}
		$template = vB_Template::create($template_name);

		// main comment article info block
		$article_url = vB_Route::create('vBCms_Route_Content', $article['nodeid'].'-'.$article['url'])->getCurrentURL();
		$join_char = strpos($article_url,'?') ? '&amp;' : '?';
		$comment_url = $article_url . $join_char . "commentid=" . $post['postid'] . "#post" . $post['postid'];

		$template->register('article_url', $article_url);
		$template->register('comment_url', $comment_url);
		$template->register('article_title', $article['title']);
		$template->register('pagetext', nl2br($this->get_post()->get_summary(40)));

		// comment post info
		$template->register('userinfo', $current_user->get_record());
		$template->register('username', $post['username']);
		$template->register('postid', $post['postid']);
		$template->register('postdate', vbdate($vbulletin->options['dateformat'], $post['dateline'], true));
		$template->register('postdatetime', vbdate($vbulletin->options['timeformat'], $post['dateline']));


		// get deleted moderation data
		$show['deleted'] = false;
		if ($current_user->isModerator())
		{
			$del_array = array();
			$log = $this->get_post()->get_deletion_log_array();
			if ($log['userid'])
			{
				$del_array['del_phrase'] = $vbphrase['message_deleted_by_x'];
			}
			else
			{
				$log = $this->get_post()->get_thread()->get_deletion_log_array();
				if (!$log['userid'])
				{
					$del_array['del_phrase'] = $vbphrase['thread_deleted_by_x'];
					$log = false;
				}
			}

			if ($log)
			{
				$del_array['del_username'] = $log['username'];
				$del_array['del_userid'] = $log['userid'];
				$del_array['del_reason'] = $log['reason'];
				$template->register('del_array', $del_array);
				$show['deleted'] = true;
			}
		}

		// stats
		$template->register('viewcount', $article['viewcount']);
		$template->register('replycount', $article['replycount']);

		// last comment post info
		$lastpost_userinfo = array(
			'lastposterid' => $article['lastposterid'],
			'lastposter' => $article['lastposter']
		);
		$template->register('lastpost_userinfo', $lastpost_userinfo);
		$template->register('lastpostdate', vbdate($vbulletin->options['dateformat'], $article['lastpost'], true));
		$template->register('lastpostdatetime', vbdate($vbulletin->options['timeformat'], $article['lastpost']));

		return $template->render();
	}
}

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 37602 $
|| ####################################################################
\*======================================================================*/