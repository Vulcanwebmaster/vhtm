<?php
	class Mlienhe extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->library('session');
		}
		
		function insert()
		{
			$this->db->insert('unix_lienhe',array('hoten'=>$this->input->post('hoten'),
													'email'=>$this->input->post('email'),
													'tieude'=>$this->input->post('tieude'),
													'noidung'=>$this->input->post('noidung')));
			$this->session->set_userdata('message','Thư của bạn đã được gửi thành công.');
		}
	}
?>