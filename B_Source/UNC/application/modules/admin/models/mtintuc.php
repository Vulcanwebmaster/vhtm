<?php
 class Admin_Model_Mtintuc extends Zend_Db_Table_Abstract
{
	protected $_name="unc_news";
 	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}
	
	function isExist($title)
	{
		$query=$this->db->query("select * from unc_news where news_title='".$title."'");
		if (count($query->fetchAll())>0)
			return true;
		else return false;
	}
	
	function insertNews($input)
	{
		if (!$this->isExist($input['news_title']))
		{
			$this->insert($input);
			//$query=$this->db->query('insert into unc_news (news_title, news_summary, news_content, news_author,  news_post_date, category_id,is_hot,viewer_number) values("'.$input['news_title'].'","'.$input['news_summary'].'","'.$input['news_content'].'","'.$input['news_author'].'","'.gmdate('Y-m-d h:i:s',time() + 7*3600).'","'.$input['category_id'].'","'.$input['is_hot'].'","")');
			//return $query;
		}
	}
	
	function addNews($input,$checkbox)
	{
		$input['category_id']=$checkbox;
		if (!$this->isExist($input['news_title']))
		{
			$query=$this->insert($input);
			return $query;
		}
	}
	
	function getCategoryIDByUserId($userid)
	{
		$query=$this->db->query("select * from unc_manage_category where user_id='".$userid."'");
		$list=$query->fetchAll();
		$categoriesId=array();
		foreach ($list as $item)
		{
			$count=0;
			foreach ($categoriesId as $ctId)
			{
				if ($ctId==$item['category_id'])
				{
					$count++;
					break;
				}
			}
			if ($count==0)
				$categoriesId[]=$item['category_id'];
		}
		return $categoriesId;
	}
	
	function getListNews()
	{
		$query=$this->db->query("select * from unc_news");
		return $query->fetchAll();
	} 
	
	function getListNewsByUserId($userid)
	{
		$categoriesId = $this->getCategoryIDByUserId($userid);
		$result=array();
		foreach ($categoriesId as $categoryId)
		{
			$query=$this->db->query("select * from unc_news where category_id like '%,".$categoryId.",%'");
			$list=$query->fetchAll();
			foreach ($list as $item)
			{
				if (!$this->isContain($result, $item))
					$result[]=$item;
			}
		}
		return $result;
	} 
	
	function getListNewsByAuthor($userId)
	{
		$query=$this->db->query("select * from unc_news where user_id='".$userId."'");
		$list=$query->fetchAll();
		$mChuyenmuc=new Admin_Model_Mchuyenmuc();
		$listCategories=$mChuyenmuc->getListCategoryIdByUserId($userId);
		foreach ($listCategories as $category)
		{
			$moreList=$this->getNewsByCategoryId($category['category_id']);
			foreach ($moreList as $item)
			{
				if ($item['news_status']=="Chưa duyệt" && $item['user_id']!=$userId)
					if (!$this->isContain($list, $item))
						$list[]=$item;
			}
		}
		return $list;
	}
	
	function isContain($list, $item)
	{
		$count=0;
		foreach($list as $element)
		{
			if ($element['news_id']==$item['news_id'])
			{
				$count++;
				break;
			}
		}
		if ($count>0) return true;
		else return false;
	}
	
	function getCategoryById($categoryId)
	{
		$query=$this->db->query("select * from unc_category where category_id='".$categoryId."'");
		$list=$query->fetchAll();
		if (count($list)>0)
		{
			return $list[0];
		}
		return false;
	} 
	
	function deleteNews($id)
	{
		$query=$this->delete('news_id="'.$id.'"');
		return $query;
	}
	
	function getListCategories()
	{
		$query=$this->db->query("select * from unc_category");
		return $query->fetchAll();
	}
	
	function getNewsById($id)
	{
		$query=$this->db->query('select * from unc_news where news_id="'.$id.'"');
		$list=$query->fetchAll();
		return $list[0];
	}
	
	function replaceChar( $char1, $char2, $string)
	{
		return str_replace($char1, $char2, $string);
	}
	
	function editnews($id,$input,$checkbox)
	{
		$news_title=$input['news_title'];
		$news_alias=$input['alias'];
		$input['news_summary']=$this->replaceChar("'",'"', $input['news_summary']);
		$input['news_avatar']=$this->replaceChar("'",'"', $input['news_avatar']);
		$input['news_content']=$this->replaceChar("'",'"', $input['news_content']);
		if ($input['news_status'] == "Chưa duyệt") {
			$input['news_author']='';
		}		
		$query=$this->update($input,"news_id='".$id."'");
		return $query;
	}

	function countChildById($category_id)
	{
		$query=$this->db->query("select * from unc_category where category_parent_id='".$category_id."'");
		$list=$query->fetchAll();
		return count($list);
	}

	function getListAllThamdo()
	{
		$query=$this->db->query("select * from unc_polls where polls_type!='2'");
		return $query->fetchAll();
	}
	function getListThamdobyid($polls_id)
	{
		$query = $this->db->query('select * from unc_polls where polls_id = "'.$polls_id.'"');
		$list = $query->fetchAll();
		if (count($list)>0)
			return $list[0];
		else return false;
	}
	public function deletethamdo($polls_id)
	{
		$query=$this->db->query('delete from unc_polls where polls_id="'.$polls_id.'"');
		return $query;
	}
	
	public function getListNewsByParentId($parent_id)
	{
		$result=array();
		$query1=$this->db->query("select * from unc_category where category_parent_id='".$parent_id."'");
		$listChilds=$query1->fetchAll();
		foreach ($listChilds as $child)
		{
			$currentList=$this->getNewsByCategoryId($child['category_id']);
			foreach ($currentList as $item)
			{
				if (!$this->isContain($result, $item))
					$result[]=$item;
			}
		}
		return $result;
	}
	
	public function getNewsByCategoryId($category_id)
	{
		$query1=$this->db->query("select * from unc_news where category_id like '%,".$category_id.",%'");
		return $query1->fetchAll();
	}
}