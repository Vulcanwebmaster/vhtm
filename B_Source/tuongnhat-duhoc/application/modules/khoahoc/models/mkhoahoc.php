<?php
	class Mkhoahoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function list_khoahoc($number, $offset)
		{
			$query=$this->db->get('tn_khoahoc',$number,$offset);
			return $query->result();
		}
		
		function list_tiente()
		{
			$query=$this->db->get('tn_tiente');
			return $query->result();
		}
		
		function list_loaikhoahoc()
		{
			$query=$this->db->get('tn_loaikhoahoc');
			return $query->result();
		}
		
		function insert()
		{
			$data=array(
						'ten'			=> $this->input->post('ten'),
						'loaikhoahoc'	=> $this->input->post('loaikhoahoc'),
						'hocphi'		=> $this->input->post('hocphi').' '.$this->input->post('tiente'),
						'noidung'		=> $this->input->post('noidung')
						);
			$this->db->insert('tn_khoahoc',$data);
		}
		
		function delete($id)
		{
			$this->db->delete('tn_khoahoc',array('id'=>$id));
		}
		
		function update($id)
		{
			$data=array(
						'ten' 			=> $this->input->post('ten'),
						'loaikhoahoc'	=> $this->input->post('loaikhoahoc'),
						'hocphi'		=> $this->input->post('hocphi'),
						'noidung'		=> $this->input->post('noidung')	
						);
			$this->db->where('id',$id);
			$this->db->update('tn_khoahoc',$data);
		}
		
		function get_khoahoc($id)
		{
			$query=$this->db->get_where('tn_khoahoc',array('id'=>$id));
			return $query->row();
		}
		
		function count_all()
		{
			return $this->db->count_all('tn_khoahoc');
		}
	}
?>