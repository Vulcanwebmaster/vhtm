<?php
class Default_Model_Mtimkiem extends Zend_Db_Table_Abstract
{
	protected $_name="unc_news";
	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}
	
	function getNewsByKey($key)
	{
		$data=$this->db->query('select * from unc_news where news_title like "%'.$key.'%"');
	    return $data->fetchAll();
	}
}