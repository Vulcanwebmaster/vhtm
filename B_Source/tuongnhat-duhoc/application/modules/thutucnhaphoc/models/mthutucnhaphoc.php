<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mthutucnhaphoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function updateThuTucNhapHoc($id)
		{
			$data=array(
						'tieude'	=>	$this->input->post('tieude'),
						'vietnam'	=>	$this->input->post('vietnam'),
						'english'	=>	$this->input->post('english')
						);
			$this->db->where('id',$id);
			$this->db->update('tn_thutuc',$data);
		}
		
		function getThuTuc($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('tn_thutuc');
			return $query->row();
		}
	}
?>