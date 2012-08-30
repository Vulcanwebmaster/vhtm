<?php
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getRowById($id)
		{
			$this->db->where('id',$id);
			$ds=$this->db->get('tn_trangchu');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}

		function update($column,$input)
		{
			if ($this->db->update('n_tn_trangchu',$input,array('id'=>$column)))
				return true;
			else return false;
		}
	}	
?>