<?php
	class Admin_Model_Mrss extends Zend_Db_Table_Abstract
	{
		protected $_name='unc_rss';
		private $db;
		function __construct()
		{
			parent::__construct();
			$this->db=Zend_Registry::get('db');
		}
		
		function getListRssByCampaignId($campaign_id)
		{
			$query=$this->db->query("select * from unc_rss where campaign_id='".$campaign_id."'");
			return $query->fetchAll();
		}
		
		function getCampaignByName($name)
		{
			$query=$this->db->query("select * from unc_campaign where name='".$name."'");
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function getCampaignById($id)
		{
			$query=$this->db->query("select * from unc_campaign where id='".$id."'");
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function getListCampaign()
		{
			$query=$this->db->query("select * from unc_campaign");
			return $query->fetchAll();
		}
		
		function insertRss($data)
		{
			$result=$this->insert($data);
			return $result;
		}
		
		function delRssById($id)
		{
			$where="id='".$id."'";
			$result=$this->delete($where);
			return $result;
		}
		
		function getRssById($id)
		{
			$query=$this->db->query("select * from unc_rss where id='".$id."'");
			$list=$query->fetchAll();
			if (count($list)>0)
				return $list[0];
			else return false;
		}
		
		function updateRss($id, $data)
		{
			$where="id='".$id."'";
			$result=$this->update($data, $where);
			return $result;
		}
	}