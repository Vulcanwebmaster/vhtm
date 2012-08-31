<?php
class Mpolicy extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getPolicy($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tn_policy');
		return $query->result();
	}

	function getListPolicy()
	{
		$query=$this->db->get('tn_policy');
		return $query->result();
	}
		
	function updatePolicy()
	{
		for ($i=1; $i < 6; $i++) { 
			$data=(
				array(
						'content'=>$this->input->post('content'.$i),
				)
				);
			$this->db->where('id',$i);
			if(!$this->db->update('tn_policy',$data))
			{
				return false;
			}	
		}
		
		return true;
	}
}
?>