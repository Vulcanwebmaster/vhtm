<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		
		function deleteContact($id)
		{
			$this->db->where('id',$id);
			if($this->db->delete('oto_contacts'))
				return true;
			else return false;
		}
	}
?>