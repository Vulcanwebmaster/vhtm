<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MContactUs extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function save()
    {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$email = $this->input->post('email');
		$zip_code = $this->input->post('zip_code');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$contents = $this->input->post('contents');
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
            'address' => $address,
            'city' => $city,
			'state' => $state,
			'email' => $email,
			'zip_code' => $zip_code,
            'country' => $country,
            'phone' => $phone,
			'contents' => $contents
 		);
		if($this->db->insert('is_contact_us',$data)){
			return true;
		}else{
			return false;
		}
    }

}

