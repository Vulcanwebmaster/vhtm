<?php
	class Mlichhoithao extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function get_lichhoithao() 
		{
			$query=$this->db->get('unix_lichhoithao');
			return $query->result();
		}
		
		function insert_lichhoithao($sukien,$thoigian,$diadiem,$donvitochuc,$tinhtrang)
		{
			$data=array(
						'sukien'=>$sukien,
						'thoigian'=>$thoigian,
						'diadiem'=>$diadiem,
						'donvitochuc'=>$donvitochuc,
						'tinhtrang'=>$tinhtrang
						);
			$this->db->insert('unix_lichhoithao',$data);
		}
		
		function delete_lichhoithao()
		{
			$query=$this->db->get('unix_lichhoithao');
			if($query->num_rows()==0)
				return true;
			else if($this->db->empty_table('unix_lichhoithao'))
			{
				return true;
			}
			else return false;
			
		}
		function getLuotXem($id)
		{
			$luotxem=$this->db->get('unix_hoidap',array('id_hoidap'=>$id));
			return $luotxem->row(0);
		}
	}
?>