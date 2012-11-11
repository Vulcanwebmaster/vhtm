<?php
	class Default_Model_Mhinhanh extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getCategoryByCategoryId($id)
		{
			$query = $this->db->query('select * from unc_images_category where category_id = "'.$id.'"');
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function isActive($listCategoriesid)
		{
			$count=0;
			foreach($listCategoriesid as $id)
			{
				$cate=$this->getCategoryByCategoryId($id);
				if ($cate['is_active']=='1')
					$count++;
			}
			if ($count>0) return true;
			else return false;
		}
		
		function getListImageRight()
		{
			$query = $this->db->query('select * from unc_images where is_active = 1 order by image_id desc limit 6');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $img)
			{
				$listCategoriesid=explode(',', $img['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$img;
			}
			return $result;
		}
		
		function getListImageLeft()
		{
			$query = $this->db->query('select * from unc_images where is_active = 1 order by image_id desc');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $img)
			{
				$listCategoriesid=explode(',', $img['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$img;
			}
			return $result;
		}
		
		function getListCategory()
		{
			$query = $this->db->query('select * from unc_images_category where is_active = 1');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list;
			else return false;
		}
		function getListVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1" order by video_id desc');
			return $query->fetchAll();
		}
		
		function getImagesByCategoryId($category_id)
		{
			$query = $this->db->query('select * from unc_images where category_id like "%,'.$category_id.',%" order by image_id desc');
			return $query->fetchAll();
		}
		
		function getListImagesAll()
		{
			$query = $this->db->query('select * from unc_images where is_active="1" order by image_id desc');
			$list=$query->fetchAll();
			$result=array();
			foreach ($list as $img)
			{
				$listCategoriesid=explode(',', $img['category_id']);
				if ($this->isActive($listCategoriesid))
					$result[]=$img;
			}
			return $result;
		}
		
		function getImageById($image_id)
		{
			$query = $this->db->query('select * from unc_images where image_id="'.$image_id.'"');
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
	}
