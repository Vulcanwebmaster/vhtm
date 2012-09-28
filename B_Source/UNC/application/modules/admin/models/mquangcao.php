<?php
class Admin_Model_Mquangcao extends Zend_Db_Table_Abstract{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListQC()
		{
			$query=$this->db->query('select * from unc_ads');
			return $query->fetchAll();
		}
		
		function getOne($id)
		{
			$query=$this->db->select()->from('unc_ads')->where('ads_id=?',$id);
			return $this->db->fetchRow($query);
		}
				
		public function add($data)
		{
			$this->db->insert('unc_ads',$data);
		}
		
		public function edit($id,$data)
		{
			$where="ads_id=".$id;
			$this->db->update('unc_ads',$data,$where); 
		}
		
		public function del($id)
		{
			$where="ads_id=".$id;
			$this->db->delete('unc_ads',$where);
		}
}
?>