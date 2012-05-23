<?php
	class Getgioithieu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function get()
		{
			$ds=$this->db->get('gioithieu');
			if ($ds->num_rows()>0)
			{
				$kq=$ds->row(0);
				$ds->free_result();
				return $kq;
			}
			else return false;
		}
	}
?>