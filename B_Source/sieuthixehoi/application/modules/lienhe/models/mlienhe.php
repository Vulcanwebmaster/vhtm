<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function insertContact()
		{
			$data=array(
						'contact_name'		=> $this->input->post('contact_Firstname'),
						'contact_name'		=> $this->input->post('contact_Lastname'),
						'contact_email'		=> $this->input->post('contact_email'),
						'category_id'	=> $this->input->post('category'),
						'contact_subject'		=> $this->input->post('contact_subject'),
						'contact_message'	=> $this->input->post('contact_message'),
						'contact_date_create'	=> $this->input->post('contact_date_create'),
						
						);
			if($this->db->insert('tn_contacts',$data))
				return true;
			else return false;
		}
		
		function deleteContact($id)
		{
			$this->db->where('id',$id);
			if($this->db->delete('tn_contacts'))
				return true;
			else return false;
		}
	}
?>