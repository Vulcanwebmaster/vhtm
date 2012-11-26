<?php
	class Mgioithieu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getOne()
		{
			$this->db->where('id',1);
			$query = $this->db->get('oto_about_us');
			return $query->row();
		}
	}
?>