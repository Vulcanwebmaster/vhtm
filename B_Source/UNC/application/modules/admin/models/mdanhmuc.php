<?php
	class Admin_Model_Mdanhmuc extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListDM()
		{
			$query=$this->db->query('select * from unc_category');
			return $query->fetchAll();
		}
		
		function getOne($id)
		{
			$query=$this->db->select()
						->from('unc_category')
						->where('category_id=?',$id);
			return $this->db->fetchRow($query);
		}
		
		public function edit($id,$data)
		{
			$where="category_id=".$id;
			$this->db->update('unc_category',$data,$where); 
		}
		
		public function add($data)
		{
			$this->db->insert('unc_category',$data);
		}
		
		public function del($id)
		{
			$where="category_id=".$id;
			$this->db->delete('unc_category',$where);
		}
	}
?>