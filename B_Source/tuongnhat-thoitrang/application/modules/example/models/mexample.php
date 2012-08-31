<?php
class Mexample extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getcontactus()
	{
		$result=$this->db->get('example_contactus_info');
		return $result->result();
	}
	
	function savecontact()
	{
		$data=(
		array(
				'slogan'=>$this->input->post('slogan'),
				'address'=>$this->input->post('address'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'fax'=>$this->input->post('fax'),
				'website' => $this->input->post('website')
		)
		);
		if($this->db->update('example_contactus_info',$data))
		{
			return true;
		}
		else {
			return false;
		}
	}
	function getuserrow() {
		$query=$this->db->get('example_contactus_message_info');
		
		return $query->num_rows();
	}
	function getdatausers($number, $offset){
            $query =  $this->db->get('example_contactus_message_info',$number,$offset);
            return $query->result();
    } 
    function getuserid()
    {
    	$id=$this->uri->segment(4);
    	$this->db->where('id',$id);
    	$result=$this->db->get('example_contactus_message_info');
    	return $result->result();
    }
	function postMessage()
	{
		$data=(array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'subject'=>$this->input->post('subject'),
				'yourmessage'=>$this->input->post('message'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
		));
		if($this->db->insert('example_contactus_message_info',$data))
		{
			return true;
		}
		else {
			return false;
		}
	}
	function getmessageuser()
	{
		$result=$this->db->get('example_contactus_message_info');
		return $result->result();
	}
	function delMessage()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('example_contactus_message_info'))
		{
	   		return true;
		}
	  	else 
	  	return false;
	 }
	 
	 
}
?>