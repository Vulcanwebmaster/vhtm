<?php
	class Mcontact extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
				
		function getListContact()
		{
			$query=$this->db->get('unix_contact');
			if($query->num_rows()>0)
			{
				$row=$query->row();
				return $row;
			}
			else return false;
		}
		
		function updateContact($id)
		{
			$data=array(
						'ten'		=>	$this->input->post('ten'),
						'diachi'	=>	$this->input->post('diachi'),
						'dienthoai'	=>	$this->input->post('dienthoai'),
						'email'		=>	$this->input->post('email'),
						'website'	=>	$this->input->post('website')
						);
			$this->db->update('unix_contact',$data,array('id'=>$id));
		}
	}
	
?>