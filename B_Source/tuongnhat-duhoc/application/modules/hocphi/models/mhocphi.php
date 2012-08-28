<?php
class Mhocphi extends Base_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function list_hocphi()
	{
		$query=$this->db->get('tn_khoahoc');
		return $query->result();
	}
	
	function list_loaikhoahoc()
	{
		$query=$this->db->get('tn_loaikhoahoc');
		return $query->result();
	}
}
?>