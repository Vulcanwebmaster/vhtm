<?php
	class Admin_Model_Mcomment extends Zend_Db_Table_Abstract
	{
		private $db;
		function __construct()
		{
			$this->db=Zend_Registry::get('db');
		}
		
		function getListCampaigns()
		{
			
		}
	}