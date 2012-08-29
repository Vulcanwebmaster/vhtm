<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();			
		}
		
		function InsertContact($input)
		{
			if ($this->db->insert('n_b_contact',$input))
				return true;
			else return false;
		}
		
		function CountFull()
		{
			$ds=$this->db->get('n_b_contact');
			$count=$ds->num_rows();
			$ds->free_result();
			return $count;
		}
		
		function GetList($index)
		{
			$ds=$this->db->get('n_b_contact',6,$index);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
	}
?>