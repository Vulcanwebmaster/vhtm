<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function GetList($index)
		{
			$ds=$this->db->get('tn_lienhe',6,$index);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function CountFull()
		{
			$ds=$this->db->get('tn_lienhe');
			$count=$ds->num_rows();
			$ds->free_result();
			return $count;
		}
		
		function Insert($input)
		{
			if ($this->db->insert('tn_lienhe',$input))
				return true;
			else return false;
		}
	}
?>