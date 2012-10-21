<?php
	class Admin_Model_Mgetnews extends Zend_Db_Table_Abstract
	{
		protected $_name='unc_campaign';
		private $db;
		function __construct()
		{
			parent::__construct();
			$this->db=Zend_Registry::get('db');
		}
		
		function getListCampaigns()
		{
			$query=$this->db->query("select * from unc_campaign");
			return $query->fetchAll();
		}
		
		function insertCampaign($input)
		{
			$result=$this->insert($input);
			return $result;
		}
		
		function deleteCampaign($id)
		{
			$where="id='".$id."'";
			$result=$this->delete($where);
			return $result;
		}
		
		function editCampaign($id,$data)
		{
			$where="id='".$id."'";
			$result=$this->update($data, $where);
			return $result;
		}
		
		function getCampaignById($id)
		{
			$query=$this->db->query("select * from unc_campaign where id='".$id."'");
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
	}