<?php
	class Admin_Model_Mimage extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getList()
		{
			$query = $this->db->query('select * from unc_images order by is_active desc, image_id desc');
			return $query->fetchAll();
		}
		
		function insertImage($input)
		{
			$query = $this->db->query("insert into unc_images(`image_name`, `image_link`, `image_date_create`, `is_active`) 
										values ('".$input['image_name']."','".$input['image_link']."',
												'".gmdate("Y-m-d h:i:s",time() + 7*3600)."','".$input['is_active']."')");
			return $query;
		}
		
		function getImageIdNewest()
		{
			$query = $this->db->query('select * from unc_images order by image_id desc limit 1');
			$list = $query->fetchAll();
			if(count($list) > 0) return $list[0]['image_id'];
			else return false;
		}
		
		function insertImageForCategory($image_id)
		{
			$query = $this->db->query('insert into unc_images_category values ("'.$image_id.'")');
			return $query;
		}
		
		function delImageInCategory($image_id)
		{
			$query = $this->db->query('delete from unc_images_category where image_id = "'.$image_id.'"');
			return $query;
		}
		
		function delImage($image_id)
		{
			$query = $this->db->query('delete from unc_images where image_id = "'.$image_id.'"');
			return $query;
		}
		
		function getListCategoryIdByImage($image_id)
		{
			$query = $this->db->query('select distinct category_id from unc_images_category where image_id="'.$image_id.'"');
			return $query->fetchAll();
		}
		
		function getImageById($image_id)
		{
			$query = $this->db->query('select * from unc_images where image_id = "'.$image_id.'"');
			$list = $query->fetchAll();
			return $list[0];
		}
		
		function editImage($id,$input)
		{
			$query=$this->db->query("update unc_images 
									set image_name='".$input['image_name']."', image_link='".$input['image_link']."', is_active='".$input['is_active']."'
									where image_id='".$id."'");
			return $query;
		}
		
		function delManageCategoryByImageId($image_id)
		{
			$query = $this->db->query('delete from unc_images_category where image_id = "'.$image_id.'"');
			return $query;
		}
		
		function getListCategoryImage()
		{
			$query = $this->db->query('select * from unc_images_category');
			$list = $query->fetchAll();
			if(count($list) > 0)
				return $list;
			else return false;
		}
		
		function getListImageCategoryByImageId($image_id)
		{
			$query = $this->db->query('select category_id from unc_images_category where image_id = "'.$image_id.'"');
			return $query->fetchAll();
		}
	}
?>