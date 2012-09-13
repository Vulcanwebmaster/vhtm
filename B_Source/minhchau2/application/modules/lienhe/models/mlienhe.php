<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function getOne()
		{
			$this->db->where('id',1);
			$query = $this->db->get('mc_contact_us');
			return $query->row();
		}
	}
?>