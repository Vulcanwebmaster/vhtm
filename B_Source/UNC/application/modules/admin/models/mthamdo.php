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
		if (count($list)>0)
		{
			$target=$list[0];
			return $target['polls_content'];
		}
		else return false;
	}
	
	function updateActive($input)
	{
		$result=$this->update($input, "polls_id='1'");
		return $result;
	}
	
	function getQuestionById($id)
	{
		$query=$this->db->query("select * from unc_polls where polls_id='".$id."'");
		$list=$query->fetchAll();
		if (count($list)>0)
		{
			$target=$list[0];
			return $target['polls_content'];
		}
		else return false;
	}
	
	function getListPollsByType($type)
	{
		$query=$this->db->query("select * from unc_polls where polls_type='".$type."'");
		$list=$query->fetchAll();
		return $list;
	}
	
	function updatePoll($input, $id)
	{
		if ($input['is_active']=='1' && $input['polls_type']=='0')
		{
			$listQuestion=$this->getListPollsByType("0");
			//var_dump($listQuestion); die();
			foreach ($listQuestion as $item)
			{
				$newstt=array("is_active"=>"0");
				$this->update($newstt,"polls_id='".$item['polls_id']."'");
			}
		}
		$query=$this->update($input, "polls_id='".$id."'");
		return $query;
	}
	
	function insertPoll($input)
	{
		if ($input['is_active']=='1' && $input['polls_type']=='0')
		{
			$listQuestion=$this->getListPollsByType("0");
			foreach ($listQuestion as $item)
			{
				$newstt=array("is_active"=>"0");
				$this->update($newstt,"polls_id='".$item['polls_id']."'");
			}
		}
		$query=$this->insert($input);
		return $query;
	}
	
	function getAnswersByQuestionId($questionId)
	{
		$query=$this->db->query("select * from unc_polls where question_id = '".$questionId."'");
		return $query->fetchAll();
	}
}