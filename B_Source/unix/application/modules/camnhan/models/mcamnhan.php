<?php
	class Mcamnhan extends CI_Model
	{
		function construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getList($index)
		{
			$ds=$this->db->get('unix_camnhan',5,$index);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function count()
		{
			$ds=$this->db->get('unix_camnhan');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
		}
	}
?>