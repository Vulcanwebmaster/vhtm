<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mhinhanh extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function getHinhAnhID($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('tn_hinhanh');
			return $query->row(0);
		}
		
		function getListHinhAnh()
		{
			$query=$this->db->get('tn_hinhanh');
			return $query->result();
		}
		
		function updateHinhAnh($id)
		{
			$data=array(
						'tieude'	=>	$this->input->post('tieude'),
						'noidung'	=>	$this->input->post('noidung')
						);
			$this->db->where('id',$id);
			$this->db->update('tn_hinhanh',$data);
		}
		
		function insertHinhAnh()
		{
			$data=array(
						'tieude'	=>	$this->input->post('tieude'),
						'noidung'	=>	$this->input->post('noidung')
						);
			$this->db->insert('tn_hinhanh',$data);
		}
		
		function delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('tn_hinhanh');
		}
	}
?>