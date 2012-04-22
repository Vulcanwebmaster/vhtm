<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MContactUs extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function save()
    {
		$name = $this->input->post('name');
		$company = $this->input->post('company');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$email_com = $this->input->post('email_com');
		$contents = $this->input->post('contents');
		$data = array(
			'name' => $name,
			'company' => $company,
            'address' => $address,
            'phone' => $phone,
			'mobile' => $phone,
			'email' => $email,
			'email_com' => $email_com,
			'contents' => $contents
 		);
		if($this->db->insert('is_contact_us',$data)){
			return true;
		}else{
			return false;
		}
    }

}

