<?php
	class Mdiemthi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function getList($index,$dot)
		{
			$this->db->order_by('stt','asc');
			$this->db->where('dotthi',$dot);
			$ds=$this->db->get('unix_diemthi',50,$index);
			return $ds->result();
		}
		
		function getDotThi()
		{
			$query=$this->db->get('unix_dotthi');
			return $query->result();
		}
		
		function insert_diemthi($a,$b,$c,$d,$e,$f)
		{
			$data=array(
						'hocsinh'	=>	$a,
						'phuhuynh'	=>	$b,
						'lop'		=>	$c,
						'diemthi'	=>	$d,
						'dotthi'	=>	$e,
						'stt'		=> $f
						);
			$this->db->insert('unix_diemthi',$data);

		}
		
		function get_diemthi($dot)
		{
			$this->db->where('dotthi',$dot);
			$query=$this->db->get('unix_diemthi');
			//var_dump($query->result());die();
			return $query->result();
		}
		
		function insert_dotthi($dot)
		{
			$this->db->insert('unix_dotthi',array('dotthi'=>$dot));		
		}
		
		function CountFull()
		{
			$ds=$this->db->get('unix_diemthi');
			$count=$ds->num_rows();
			$ds->free_result();
			return $count;
		}
		
		function countDotThi($dot)
		{
			$this->db->where('dotthi',$dot);
			$query=$this->db->get('unix_diemthi');
			return $query->num_rows();	
		}
		
		function deleteDiemThi($dot)
		{
			$this->db->where('dotthi',$dot);
			$this->db->delete('unix_diemthi');
		}

		function deleteDotThi($dot)
		{
			$this->db->where('dotthi',$dot);
			$this->db->delete('unix_dotthi');
		}
	}
?>