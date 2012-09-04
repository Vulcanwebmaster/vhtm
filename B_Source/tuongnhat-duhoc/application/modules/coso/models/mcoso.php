<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mcoso extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function getCoSo($stt)
		{
			$query=$this->db->get('tn_coso');
			return $query->row($stt);
		}
		
		function getListCoSo()
		{
			$query=$this->db->get('tn_coso');
			return $query->result();
		}
		
		function getCoSoID($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('tn_coso');
			return $query->row();
		}
		
		function updateCoSo($id)
		{
			$data=array(
						'ten'		=>	$this->input->post('ten'),
						'tieude'	=>	$this->input->post('tieude'),
						'noidung'	=>	$this->input->post('noidung')
			);
			$this->db->where('id',$id);
			$this->db->update('tn_coso',$data);
		}
	}
?>