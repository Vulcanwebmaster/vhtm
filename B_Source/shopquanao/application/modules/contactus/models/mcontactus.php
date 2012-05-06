<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MContactUs extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function save($name, $email, $message)
    {
		$data = array(
			'name' => $name,
			'email' => $email,
			'contents' => $message
 		);
		if($this->db->insert('shop_contact_us',$data)){
			return true;
		}else{
			return false;
		}
    }

}

