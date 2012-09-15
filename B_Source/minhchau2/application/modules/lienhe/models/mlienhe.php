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
						'name'		=> $this->input->post('contact_fullname'),
						'email'		=> $this->input->post('contact_email'),
						'company'	=> $this->input->post('contact_companyname'),
						'phone'		=> $this->input->post('contact_phone'),
						'ordercode'	=> $this->input->post('contact_orderno'),
						'rmacode'	=> $this->input->post('contact_rma'),
						'detail'	=> $this->input->post('contact_question')
						);
			if($this->db->insert('mc_list_contact',$data))
				return true;
			else return false;
		}
		
		function deleteContact($id)
		{
			$this->db->where('id',$id);
			if($this->db->delete('mc_list_contact'))
				return true;
			else return false;
		}
	}
?>