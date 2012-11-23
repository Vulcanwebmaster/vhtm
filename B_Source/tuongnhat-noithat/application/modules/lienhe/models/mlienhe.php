<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		//,$number, $offset
		function getList($number, $offset)
		{
			$query = $this->db->get('tn_contacts',$number, $offset);
			return $query->result();
		}
		
		function count()
		{
			$query = $this->db->get('tn_contacts');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		function del($contact_id)
		{
			$this->db->where('contact_id',$contact_id);
			if($this->db->delete('tn_contacts')) return true;
			else return false;
		}
	}
?>