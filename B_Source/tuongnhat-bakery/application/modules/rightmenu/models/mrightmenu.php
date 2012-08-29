<?php
	class Mrightmenu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function GetDetailById($id)
		{
			$this->db->where('id',$id);
			$ds=$this->db->get('n_b_menuphai');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else false;
		}

		function update($column,$input)
		{
			if ($this->db->update('n_b_menuphai',$input,array('id'=>$column)))
				return true;
			else return false;
		}
		
		function countFullMenu()
		{
			$ds=$this->db->get('n_b_menuphai');
			$amount=$ds->num_rows();
			$ds->free_result();
			return $amount;
		}
		
		function getListMenu($index)
		{
			$ds=$this->db->get('n_b_menuphai',6,$index);
			$list=array();
			foreach ($ds->result() as $product)
			{
				$list[]=$product;
			}
			$ds->free_result();
			return $list;
		}
		
		function insertNewMenu($input)
		{
			if ($this->db->insert('n_b_menuphai',$input))
				return true;
			else return false;
		}
		
		function editMenuById($input,$id)
		{
			if ($this->db->update('n_b_menuphai',$input,array('id'=>$id)))
				return true;
			else return false;
		}
		
		function deleteMenuById($id)
		{
			if ($this->db->delete('n_b_menuphai',array('id'=>$id)))
				return true;
			else return false;
		}
	}	
?>