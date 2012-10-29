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
			$query = $this->db->get('tn_accounts',$number, $offset);
			return $query->result();
		}
		
		function count()
		{
			$query = $this->db->get('tn_accounts');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		function insert()
		{
			$data = array(
							'account_username'		=> $this->input->post('account_username'),
							'account_password'		=> md5($this->input->post('account_password')),
							'account_fullname'		=> $this->input->post('account_fullname'),
							'account_address'		=> $this->input->post('account_address'),
							'account_phonenumber'	=> $this->input->post('account_phonenumber'),
							'account_email'			=> $this->input->post('account_email')
			);
			$this->db->set('account_date_create','now()',false);
			if($this->db->insert('tn_accounts',$data)) return true;
			else return false;
		}
		
		function edit($account_id)
		{
			$data = array(
							'account_username'		=> $this->input->post('account_username'),
							'account_password'		=> $this->input->post('account_password'),
							'account_fullname'		=> $this->input->post('account_fullname'),
							'account_address'		=> $this->input->post('account_address'),
							'account_phonenumber'	=> $this->input->post('account_phonenumber'),
							'account_email'			=> $this->input->post('account_email')
			);
			$this->db->where('account_id',$account_id);
			if($this->db->update('tn_accounts',$data)) return true;
			else return false;
		}
		
		function isExisted($account_username)
		{
			$this->db->where('account_username',$account_username);
			$query = $this->db->get('tn_accounts');
			if($query->num_rows() > 0) return true;
			else return false;
		}
		
		function del($account_id)
		{
			$this->db->where('account_id',$account_id);
			if($this->db->delete('tn_accounts')) return true;
			else return false;
		}
	}
?>