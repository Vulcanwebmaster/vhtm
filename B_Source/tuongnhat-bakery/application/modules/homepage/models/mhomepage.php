<?php
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function GetDetailById($id)
		{
			$this->db->where('id',$id);
			$ds=$this->db->get('n_b_trangchu');
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
			if ($this->db->update('n_b_trangchu',$input,array('id'=>$column)))
				return true;
			else return false;
		}
		
		function countFullMenu()
		{
			$ds=$this->db->get('n_b_trangchu');
			$amount=$ds->num_rows();
			$ds->free_result();
			return $amount;
		}
		
		function getListFull()
		{
			$ds=$this->db->get('n_b_trangchu');
			$list=array();
			foreach ($ds->result() as $product)
			{
				$list[]=$product;
			}
			$ds->free_result();
			return $list;
		}
		
		function getListMenu($index)
		{
			$ds=$this->db->get('n_b_trangchu',6,$index);
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
			if ($this->db->insert('n_b_trangchu',$input))
				return true;
			else return false;
		}
		
		function editMenuById($input,$id)
		{
			if ($this->db->update('n_b_trangchu',$input,array('id'=>$id)))
				return true;
			else return false;
		}
		
		function deleteMenuById($id)
		{
			if ($this->db->delete('n_b_trangchu',array('id'=>$id)))
				return true;
			else return false;
		}			
	}	
?>