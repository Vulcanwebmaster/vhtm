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
		
		//get list category
		
		//Tuyet
		function insertContact()
		{
			$data=array(
						'contact_name'		=> $this->input->post('name'),
						'contact_email'		=> $this->input->post('email'),
						'contact_subject'		=> $this->input->post('subject'),
						'contact_message'	=> $this->input->post('note'),
						);
			if($this->db->insert('tn_contacts',$data))
				return true;
			else return false;
		}
		
		function count()
		{
			$query = $this->db->get('tn_contacts');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		

		function edit($contact_id)
		{
			$data = array(
							'contact_name'		=> $this->input->post('contact_name'),
							'contact_email'		=> $this->input->post('contact_email'),
							'contact_subject'	=> $this->input->post('contact_subject'),
							'contact_message'	=> $this->input->post('contact_message')
			);
			//$this->db->where('contact_id',$contact_id);
			//if($this->db->update('tn_contacts',$data)) return true;
			//else return false;
			if($this->db->insert('tn_contacts',$data))
				return true;
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