<?php
	class Default_Model_Mpoll extends Zend_Db_Table_Abstract
	{
		private $db;
		protected $_name="unc_polls";
		function __construct()
		{
			parent::__construct();
			$this->db = Zend_Registry::get('db');
		}
		
		function increasePollById($id)
		{
			$query=$this->db->query("select * from unc_polls where polls_id='".$id."'");
			$list=$query->fetchAll();
			if (count($list)>0)
			{
				$target=$list[0];
				$current_votes=$target['polls_vote']+1;
				$input=array("polls_vote"=>$current_votes);
				$result=$this->update($input, "polls_id='".$id."'");
				return $result;
			}
			else return false;
		}
		
		function showOrHidden()
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
	}