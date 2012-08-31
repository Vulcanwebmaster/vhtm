<?php
	class Mtuyendung extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();			
		}
		
		function countFull()
		{
			$ds=$this->db->get('n_b_tuyendung');
			$amount=$ds->num_rows();
			$ds->free_result();
			return $amount;
		}
		
		function getList($index)
		{
			$ds=$this->db->get('n_b_tuyendung',6,$index);
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function insertNew($input)
		{
			if ($this->db->insert('n_b_tuyendung',$input))
				return true;
			else return false;
		}
		
		function deleteById($id)
		{
			if ($this->db->delete('n_b_tuyendung',array('id'=>$id)))
				return true;
			else return false;
		}
		
		function GetDetailById($id)
		{
			$this->db->where('id',$id);
			$ds=$this->db->get('n_b_tuyendung');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else false;
		}
		
		function editById($input,$id)
		{
			if ($this->db->update('n_b_tuyendung',$input,array('id'=>$id)))
				return true;
			else return false;
		}
	}
?>