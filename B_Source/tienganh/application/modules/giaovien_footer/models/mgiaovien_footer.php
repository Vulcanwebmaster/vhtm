<?php
class Mgiaovien_footer extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('giaovienft');
		return $list->num_rows();
	}
}
?>