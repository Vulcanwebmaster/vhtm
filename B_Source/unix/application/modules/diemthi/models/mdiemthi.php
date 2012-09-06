<?php
	class Mdiemthi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function getList($num,$dot)
		{
			$this->db->where('dotthi',$dot);
			$ds=$this->db->get('unix_diemthi',50,$num);
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
			return $query->result();
		}
		
		function insert_dotthi($dot)
		{
			$this->db->insert('unix_dotthi',array('dotthi'=>$dot));		
		}
		
		function CountFull($dot)
		{
			$this->db->where('dotthi',$dot);
			$query=$this->db->get('unix_diemthi');
			return $query->num_rows();
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
		
		function getIdDot($dot)
		{
			$this->db->where('dotthi',$dot);
			$query=$this->db->get('unix_dotthi');
			$data['query']=$query->row();
			return $data['query']->id;
		}
		
		function getTenDot($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('unix_dotthi');
			$data['query']=$query->row();
			return $data['query']->dotthi;
		}	
	}
?>