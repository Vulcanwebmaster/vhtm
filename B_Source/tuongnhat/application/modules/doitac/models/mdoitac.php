<?php
	class Mdoitac extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function GetList($index)
		{
			$ds=$this->db->get('tn_doitac',5,$index);
			return $ds->result();
		}
		
		function CountFull()
		{
			$ds=$this->db->get('tn_doitac');
			$count=$ds->num_rows();
			$ds->free_result();
			return $count;
		}
		
		function Insert()
		{
			$data=array(
						'ten'		=>	$this->input->post('ten'),
						'diachi'	=>	$this->input->post('diachi'),
						'fax'		=>	$this->input->post('fax'),
						'website'	=> 	$this->input->post('website'),
						'dienthoai'	=>	$this->input->post('dienthoai'),
						'email'		=>	$this->input->post('email'),
						'loaidoitac'=>	$this->input->post('loaidoitac'),
						'hinhanh'	=>	$this->input->post('hinhanh')
						);
			if ($this->db->insert('tn_doitac',$data))
				return true;
			else return false;
		}
		
		function Delete($id)
		{
			$this->db->delete('tn_doitac',array('id'=>$id));
		}
		
		function Update($id)
		{
			$data=array(
						'ten'		=>	$this->input->post('ten'),
						'diachi'	=>	$this->input->post('diachi'),
						'fax'		=>	$this->input->post('fax'),
						'website'	=> 	$this->input->post('website'),
						'dienthoai'	=>	$this->input->post('dienthoai'),
						'email'		=>	$this->input->post('email'),
						'loaidoitac'=>	$this->input->post('loaidoitac'),
						'hinhanh'	=>	$this->input->post('hinhanh')
						);
			$this->db->update('tn_doitac',$data,array('id'=>$id));
		}
		
		function getDoiTac($id)
		{
			$query=$this->db->get_where('tn_doitac',array('id'=>$id));
			return $query->row();
		}
		
		function getDT($loaidoitac)
		{
			$this->db->where('loaidoitac',$loaidoitac);
			$query=$this->db->get('tn_doitac');
			return $query->result();
		}
	}
?>