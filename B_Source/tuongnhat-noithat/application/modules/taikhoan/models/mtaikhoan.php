<?php
	class Mtaikhoan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		//,$number, $offset
		function getList($number, $offset)
		{
			$query = $this->db->get('tn_user',$number, $offset);
			return $query->result();
		}
		
		function count()
		{
			$query = $this->db->get('tn_user');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		/*function insert()
		{
			$data = array(
							'username'		=> $this->input->post('username'),
							'password'		=> md5($this->input->post('password')),
							'fullname'		=> $this->input->post('fullname'),
							'address'		=> $this->input->post('address'),
							'phonenumber'	=> $this->input->post('phonenumber'),
							'email'			=> $this->input->post('email')
			);
			$this->db->set('date_create','now()',false);
			if($this->db->insert('tn_user',$data)) return true;
			else return false;
		}*/
		
		function edit($id)
		{
			$data = array(
							'email'		=> $this->input->post('email'),
							'password'		=> $this->input->post('password'),
							'fullname'		=> $this->input->post('fullname'),
							'birthday'		=> $this->input->post('birthday'),
							'gender'	=> $this->input->post('gender'),
							'address'			=> $this->input->post('address'),
							'phone'			=> $this->input->post('phone')
			);
			$this->db->where('id',$id);
			if($this->db->update('tn_user',$data)) return true;
			else return false;
		}
		
		function isExisted($username)
		{
			$this->db->where('username',$username);
			$query = $this->db->get('tn_user');
			if($query->num_rows() > 0) return true;
			else return false;
		}
		
		function del($id)
		{
			$this->db->where('id',$id);
			if($this->db->delete('tn_user')) return true;
			else return false;
		}
	}
?>