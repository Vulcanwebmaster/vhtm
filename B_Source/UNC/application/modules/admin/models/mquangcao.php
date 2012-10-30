<?php
class Admin_Model_Mquangcao extends Zend_Db_Table_Abstract{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListQC()
		{
			$query=$this->db->query('SELECT unc_ads.*, unc_category.category_name
										FROM unc_ads, unc_category
										WHERE unc_ads.category_id = unc_category.category_id');
			return $query->fetchAll();
		}
		
		function getListcategory_name()
		{
			$query=$this->db->query('SELECT unc_ads.category_id, unc_category.category_name
										FROM unc_ads, unc_category
										WHERE unc_ads.category_id = unc_category.category_id');
			return $query->fetchAll();
		}
		
		function getListDM()
		{
			$query=$this->db->query('select * from unc_category');
			return $query->fetchAll();
		}
		
		function getOne($id)
		{
			$query=$this->db->select()->from('unc_ads')->where('ads_id=?',$id);
			return $this->db->fetchRow($query);
		}
				
		public function add($input)
		{
			if($this->db->insert('unc_ads',$input)) return true;
			else return FALSE;
		}
		
		public function edit($id,$data)
		{
			$where="ads_id=".$id;
			$this->db->update('unc_ads',$data,$where); 
		}
		
		public function del($id)
		{
			$query=$this->db->query('delete from unc_ads where ads_id="'.$id.'"');
			return $query;
		}
}
?>