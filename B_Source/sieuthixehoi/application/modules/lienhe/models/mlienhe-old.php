<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		//,$number, $offset
		function getList()
		{
			$query = $this->db->get('oto_contacts');
			return $query->result_array();
		}
		
		
		function getRowById($table,$fieldname,$value)
		{
			$this->db->where($fieldname,$value);
			$query = $this->db->get($table);
			if(count($query->result()) > 0)
				return $query->row(0);
			else return false;
		}
	
	
		function count()
		{
			$query = $this->db->get('oto_contacts');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		
		function deleteContact($id)
		{
			$this->db->where('contact_id',$id);
			if($this->db->delete('oto_contacts'))
				return true;
			else return false;
		}
	}
?>