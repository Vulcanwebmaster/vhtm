<?php
class Mgioithieu extends Base_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getGioiThieu()
	{
		$query=$this->db->get('tn_gioithieu');
		return $query->row();
	}
	
	function update($id)
	{
		$data=array(
					'tieude'	=> $this->input->post('tieude'),
					'noidung'	=> $this->input->post('noidung')
					);
		$this->db->where('id',$id);
		$this->db->update('tn_gioithieu',$data);
	}
	
	function list_loaikhoahoc()
	{
		$query=$this->db->get('tn_loaikhoahoc');
		return $query->result();
	}
}
?>