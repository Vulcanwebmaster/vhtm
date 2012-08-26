<?php
class Mlienhe extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function saveContactUs()
	{
		$data=(
			array(
					'address_vn'=>$this->input->post('address_vn'),
					'address_en'=>$this->input->post('address_en'),
					'info_vn'=>$this->input->post('info_vn'),
					'info_en'=>$this->input->post('info_en'),
					'email'=>$this->input->post('email'),
					'phone_number'=>$this->input->post('phone_number'),
					'fax_number'=>$this->input->post('fax_number')
			)
			);
		if($this->db->update('lienhe',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	function getFormData(){
		// get data to show on the form
		$query = $this->db->get("lienhe");
		$result = $query->result();
		return $result;
	}
}
?>