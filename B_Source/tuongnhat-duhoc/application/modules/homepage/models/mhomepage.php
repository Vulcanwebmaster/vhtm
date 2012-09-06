<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function list_loaikhoahoc()
		{
			$query=$this->db->get('tn_loaikhoahoc');
			return $query->result();
		}
		
		function get_loaikhoahoc($stt)
		{
			$query=$this->db->get('tn_loaikhoahoc');
			return $query->row($stt);
		}
		
		function getCoSo($stt)
		{
			$query=$this->db->get('tn_coso');
			return $query->row($stt);
		}
		
		function getHinhAnh()
		{
			$query=$this->db->get('tn_hinhanh');
			return $query->result();
		}
		
		function getLienHe()
		{
			$query=$this->db->get('tn_lienhe');
			return $query->row();
		}
	}
?>