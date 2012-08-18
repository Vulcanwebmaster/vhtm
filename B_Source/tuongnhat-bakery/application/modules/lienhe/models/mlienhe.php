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
	}
?>