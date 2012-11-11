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
	
	function getActiveIndex()
	{
		$query=$this->db->query("select * from unc_polls where polls_id='1'");
		$list=$query->fetchAll();
		$target=$list[0];
		return $target['polls_content'];
	}
	
	function updateActive($input)
	{
		$result=$this->update($input, "polls_id='1'");
		return $result;
	}
}