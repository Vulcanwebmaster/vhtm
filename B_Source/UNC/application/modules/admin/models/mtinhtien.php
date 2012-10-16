<?php
	class Admin_Model_Mtinhtien extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		public function getlist()
		{
			$query=$this->db->query('select * from  unc_commission');
			return $query->fetchAll();
		}
		public function tinhtien($fromdate,$todate)
		{
			$sub='SELECT DISTINCT news_author, SUM( review_id ) AS "Lay", (COUNT( news_author ) - SUM( review_id )) AS "TaoMoi"
				FROM unc_news WHERE (news_author != NULL OR news_author != "") AND (news_post_date BETWEEN "'.$fromdate.'" AND "'.$todate.'")
				AND (news_status="Đã duyệt")
				GROUP BY news_author';	
			$query=$this->db->query($sub);
			return $query->fetchAll();
		}
		public function tinhtienover()
		{
			$sub='SELECT DISTINCT news_author, SUM( review_id ) AS "Lay", (COUNT( news_author ) - SUM( review_id )) AS "TaoMoi"
			FROM unc_news WHERE (news_author != NULL OR news_author != "") and (news_status="Đã duyệt")
			GROUP BY news_author';
			$query=$this->db->query($sub);
			return $query->fetchAll();
		}
		public function updategia($id,$price)
		{
			$this->db->query('update unc_commission set price="'.$price.'" where id="'.$id.'"');
		}	
	}
?>