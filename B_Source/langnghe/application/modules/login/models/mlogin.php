<?php 
class Mlogin extends NIW_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function getUsers($datauser='',$datapass=''){
		$this->db->where('user_login',$datauser);
		$this->db->where('user_pass',$datapass);
		
		$query=$this->db->get('ln_user');
		return $query->result();
	}
}
