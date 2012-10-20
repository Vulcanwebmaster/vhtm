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
 * @package vBForum
 * @subpackage Search
 * @author Kevin Sours, vBulletin Development Team
 * @version $Revision: 37602 $
 * @since $Date: 2010-06-18 11:37:15 -0700 (Fri, 18 Jun 2010) $
 * @copyright vBulletin Solutions Inc.
 */

require_once (DIR . '/vb/search/type.php');


/**
 * There is a type file for each search type. This is the one for CMS Comments
 *
 * @see vB_Search_Result
 * @package vBulletin
 * @subpackage Search
 */
class vBCms_Search_Type_CmsComment extends vBForum_Search_Type_Post
{

	/** package name ***/
	protected $package = "vBCms";

	/** class name ***/
	protected $class = "CmsComment";

	/** package name for the group item ***/
	protected $group_package = "vBCms";

	/** class name for the group item***/
	protected $group_class = "Article";

	/**
	 * @param unknown_type $id
	 */
	public function create_item($id)
	{
		return vBForum_Search_Result_Post::create($id);
	}

	/**
	 * You can create from an array also
	 *
	 * @param integer $id
	 * @return object
	 */
	public function create_array($ids)
	{
		return vBForum_Search_Result_Post::create_array($ids);
	}

	/**
	 * vBForum_Search_Type_CmsComment::get_display_name()
	 * 	- get the diplay name for search type comments
	 *
	 * @return string for display name of cms comments
	 */
	public function get_display_name()
	{
		return new vB_Phrase('search', 'searchtype_vbcms_cmscomment');
	}


	/**
	 * vBForum_Search_Type_CmsComment::listUi()
	 *This function generates the search elements for the user to search for posts
	 * @param mixed $prefs : the array of user preferences / propogated form values.
	 * @param mixed $contenttypeid : the content type for which we are going to
	 *    search
	 * @param array registers : any additional elements to be registered. These are
	 * 	just passed to the template
	 * @param string $template_name : name of the template to use for display. We have
	 *		a default template.
	 * @return $html: complete html for the search elements
	 */
	public function listUi($prefs = null, $contenttypeid = null, $registers = null, $template_name = null)
	{
		// invoke the post type listUi function, but override the template to use the cms comment one instead
		return parent::listUi($prefs, $contenttypeid, $registers, 'search_input_cmscomment');
	}


	/**
	* vBForum_Search_Type_CmsComment::get_result_type()
	* 	- searches through a search result set to see which result type the
	* id was grouped under, this determines the user permission of the item
	*
	* @param array 		an array of arrays containing the id
	* @param int 		the id to search for in the array
	*
	* @return string	the result type of the id ('list', 'groups_rejected')
	*/
	protected function get_result_type($result, $id)
	{
		foreach($result as $result_type => $result_list)
		{
			if (in_array($id, array_keys($result_list)))
			{
				return $result_type;
			}
		}

		// if we didnt find the result type, return false
		return false;
	}


	/**
	* vBForum_Search_Type_CmsComment::filter_arrays()
	* 	- used to get rid of null (deleted) records in a result set
	*
	* @param array 		an array of arrays to filter
	*
	* @return string	an array of filtered arrays
	*/
	protected function filter_arrays($filter_these)
	{
		foreach ($filter_these as $key => $value_array)
		{
			$filter_these[$key] = array_filter($value_array);
		}

		return $filter_these;
	}


	/**
	* vBForum_Search_Type_CmsComment::fetch_validated_list()
	* When displaying results we get passed a list of id's. This
	* function determines which are viewable by the user.
	* In this case, we must merge data from the post which represents
	* the comment, and data from the associated article, we must also
	* use permission veiwing permissions based on the article
	*
	* @param object $user
	* @param array $ids : the postid's returned from a search
	* @param array $gids : the group id's for the posts
	* @return array (array of viewable posts, array of rejected posts)
	*/
	public function fetch_validated_list($user, $ids, $gids)
	{
		// grab the post result list for the comment
		$commment_result = parent::fetch_validated_list($user, $ids, $gids);
		$commment_result = $this->filter_arrays($commment_result); // remove null (deleted) rows

		// grab the associated article result list, filtered by permissions
		$group_contentypeid = vB_Types::instance()->getContentTypeID($this->group_package . '_' . $this->group_class);
		$group_type = vB_Search_Core::get_instance()->get_search_type_from_id($group_contentypeid);
		$group_result = $group_type->fetch_validated_list($user, $gids, $gids);
		$group_result = $this->filter_arrays($group_result); // remove null (deleted) rows


		// build an array to help merge post and article data
		$merge_ids = array();
		while (!empty($ids) AND !empty($gids))
		{
			$merge_ids[array_shift($ids)] = array_shift($gids);
		}

		// loop through each comment (post & article results),
		// and populate a final result set merging post and article data
		// note: use permissions based on cms article results
		$final_result = array();
		foreach ($merge_ids as $id => $gid)
		{
			// get result type from group result (article) and comment result (post), (ie list, or rejected)
			$group_result_type = $this->get_result_type($group_result, $gid);
			$comment_result_type = $this->get_result_type($commment_result, $id);
			// if we didnt find a result type, the comment or article must've been deleted, so move on to next item
			if (!$group_result_type OR !$comment_result_type)
			{
				continue;
			}


			// now we merge the data in a final result set,
			// using result type from article to pick up cms permissions
			// and wrapping post result type in a cmscomment result type object
			if (!is_array($final_result[$group_result_type]))
			{
				$final_result[$group_result_type] = array();
			}
			$final_result[$group_result_type][$id] = vBCms_Search_Result_CmsComment::create_from_object(
				$commment_result[$comment_result_type][$id]->get_post(),
				$group_result[$group_result_type][$gid]
			);
		}

		return $final_result;
	}
}

/*======================================================================*\
|| ####################################################################
|| # 
|| # SVN: $Revision: 37602 $
|| ####################################################################
\*======================================================================*/