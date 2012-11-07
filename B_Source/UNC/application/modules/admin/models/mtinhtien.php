<?php
	class Admin_Model_Mtinhtien extends Zend_Db_Table_Abstract
	{
		protected $_name='unc_royalty';
		private $db;
		function __construct()
		{
			parent::__construct();
			$this->db=Zend_Registry::get('db');
		}

		public function getListUser()
		{
			$query=$this->db->query("select * from unc_user where role_id='1' or role_id='2'");
			return $query->fetchAll();
		}
		
		public function updatePriceById($id,$input)
		{
			$result=$this->update($input, "id='".$id."'");
			return $result;
		}
		
		public function getPriceById($id)
		{
			$query=$this->db->query("select * from unc_royalty where id='".$id."'");
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
	}
?>