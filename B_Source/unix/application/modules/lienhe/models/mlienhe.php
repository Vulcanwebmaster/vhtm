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
													'dienthoai'=>$this->input->post('dienthoai'),
													'noidung'=>$this->input->post('noidung')));
			$this->session->set_userdata('message','Thư của bạn đã được gửi thành công.');
		}
		
		function getListContact()
		{
			$ds=$this->db->get('unix_lienhe');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function deleteContact($id)
		{
			$this->db->delete('unix_lienhe',array('lienhe_id'=>$id));
		}
		
		function getView($id)
		{
			$this->db->where('lienhe_id',$id);
			$ds=$this->db->get('unix_lienhe');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list=$item;
				break;
			}
			$ds->free_result();
			return $list;
		}
	}
?>