<?php
	class Mlichhoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function get_lichhoc() 
		{
			$query=$this->db->get('unix_lichhoc');
			return $query->result();
		}
		
		function insert_lichhoc($khoa,$thoigian,$diadiem,$giangvien)
		{
			$data=array(
						'khoa'=>$khoa,
						'thoigian'=>$thoigian,
						'diadiem'=>$diadiem,
						'giangvien'=>$giangvien
						);
			//var_dump($data);
			//die();
			$this->db->insert('unix_lichhoc',$data);
		}
		
		function delete_lichhoc()
		{
			$query=$this->db->get('unix_lichhoc');
			if($query->num_rows()==0)
				return true;
			else if($this->db->empty_table('unix_lichhoc'))
			{
				return true;
			}
			else return false;
			
		}

	}
?>