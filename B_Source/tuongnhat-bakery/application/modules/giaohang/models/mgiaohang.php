<?php
	class Mgiaohang extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
			$this->load->database();
		}
		
		function getData()
		{
			$ds=$this->db->get('n_b_giaohang');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function update($input)
		{
			if ($this->db->update('n_b_giaohang',$input,array('id'=>'1')))
				return true;
			else return false;
		}
	}
?>