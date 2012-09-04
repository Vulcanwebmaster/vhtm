<?php
	class Mlichtest extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function get_lichtest() 
		{
			$query=$this->db->get('unix_lichtest');
			return $query->result();
		}
		
		function insert_lichtest($ten,$thoigian,$diadiem,$donvitochuc,$max)
		{
			$data=array(
						'ten'=>$ten,
						'thoigian'=>$thoigian,
						'diadiem'=>$diadiem,
						'donvitochuc'=>$donvitochuc,
						'max'=>$max,
						'current'=>0
						);
			//var_dump($data);
			//die();
			$this->db->insert('unix_lichtest',$data);
		}
		
		function delete_lichtest()
		{
			$query=$this->db->get('unix_lichtest');
			if($query->num_rows()==0)
				return true;
			else if($this->db->empty_table('unix_lichtest'))
			{
				return true;
			}
			else return false;
			
		}

	}
?>