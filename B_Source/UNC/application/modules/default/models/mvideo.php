<?php
	class Default_Model_Mvideo extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $forum;
		function __construct()
		{
			$this->db = Zend_Registry::get('db');
			$this->forum = Zend_Registry::get('unc_forum');
		}
		
		function getListVideo()
		{
			$query = $this->db->query('select * from unc_video where is_active = "1" order by video_id desc');
			return $query->fetchAll();
		}
	}