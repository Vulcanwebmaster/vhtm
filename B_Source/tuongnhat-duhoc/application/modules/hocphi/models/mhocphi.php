<?php
class Mhocphi extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
		$this->load->helper('url');
	}
	function getFeeRow()
	{
		return $this->db->get('fee')->num_rows();
	}
	function getFee($number, $offset)
	{
            $query =  $this->db->get('fee',$number,$offset);
            return $query->result();
    }
	function getDetailFee()
	{
		$fee_id=$this->uri->segment(4);
		$this->db->where('fee_id',$fee_id);
		return $this->db->get('fee')->result();
	}
	function updateFee()
	{
		$id_fee=$this->uri->segment(4);
		$data=(array(
				'fee_name_vn'=>$this->input->post('fee_name_vn'),
				'fee_name_en'=>$this->input->post('fee_name_en'),
				'fee_decription_vn'=>$this->input->post('fee_decription_vn'),
				'fee_decription_en'=>$this->input->post('fee_decription_en')
		));
		$this->db->where('fee_id',$id_fee);
		if($this->db->update('fee',$data))
		{
			return true;
			
		}
		else
		{
			return FALSE;
		}
	}
	function insertFee()
	{
		$data=(array(
				'fee_name_vn'=>$this->input->post('fee_name_vn'),
				'fee_name_en'=>$this->input->post('fee_name_en'),
				'fee_decription_vn'=>$this->input->post('fee_decription_vn'),
				'fee_decription_en'=>$this->input->post('fee_decription_en')
		));
		if($this->db->insert('fee',$data))
		{
			return true;			
		}
		else
		{
			return FALSE;
		}
	}
	function delFee()
	{
		$id_fee=$this->uri->segment(4);
		$this->db->where('fee_id',$id_fee);
		if($this->db->delete('fee'))
		{
			return true;
		}
		else
		{
			return FALSE;
		}
	}
}
?>