<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MOnline_support extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function update($data)
    {
    	if (isset($data['yahoo_nick1']))
    	{
		   	$this->db->where('online_support_id',1);
    		$this->db->update('is_online_support', $data);
    	}
		else
		{
    		$data_new = array( 
    		'yahoo_nick2' => $data['yahoo_nick2'],
			'name' => $data['name'],
    		'phone' => $data['phone']
    		
    		);
    		$this->db->where('online_support_id',1);
			$this->db->update('is_online_support', $data_new);
		}
    }
    
    
}
?>