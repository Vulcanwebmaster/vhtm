<?php
	class Mdichvu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getOne()
		{
			$this->db->where('id',1);
			$query = $this->db->get('mc_services');
			return $query->row();
		}
		
		function updateDichVu()
		{
			$data=array(
						'contentv' => $this->input->post('contentv'),
						'contente' => $this->input->post('contente')
						);
			$this->db->where('id',1);
			if($this->db->update('mc_services',$data))
				return true;
			else return false;
		}
	}
?>