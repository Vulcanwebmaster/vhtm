<?php
class Mtagcloud extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('tagcloud');
		return $list->num_rows();
	}
}
?>