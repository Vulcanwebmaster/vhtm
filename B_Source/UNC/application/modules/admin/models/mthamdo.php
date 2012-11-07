<?php
 class Admin_Model_Mthamdo extends Zend_Db_Table_Abstract
{
	protected $_name="unc_polls";
 	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}
	
	function countQuestion()
	{
		$query=$this->db->query("select * from unc_polls where polls_status='0'");
		$list=$query->fetchAll();
		return count($list);
	}
}