<?php
class Default_Model_Mcounting extends Zend_Db_Table_Abstract
{
	protected $_name="unc_counting";
	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}
	
	function insertAccess($date)
    {
    	$segments=explode('-', $date);
    	$current_year=$segments[0];
    	$current_month=$segments[1];
    	$current_day=$segments[2];
    	
    	$query=$this->db->query("select * from unc_counting where day='".$current_day."' and month='".$current_month."' and year='".$current_year."'");
    	$list=$query->fetchAll();
    	
    	if (count($list)>0)
    	{
    		$today=$list[0];
    		$current_access=$today['access'];
    		$current_access++;
    		$query=$this->db->query("update unc_counting set access='".$current_access."' where day='".$current_day."' and month='".$current_month."' and year='".$current_year."'");
    	}
    	else 
    	{
    		$data=array('year'=>$current_year,
    					'day'=>$current_day,
    					'month'=>$current_month,
    					'access'=>'1');
    		$this->insert($data);
    	}
    }
}