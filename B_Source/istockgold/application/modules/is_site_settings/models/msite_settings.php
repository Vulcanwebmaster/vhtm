<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class msite_settings extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function update($data)
    {
    	if (isset($data['site_name']))
    	{
		   	$this->db->where('site_settings_id',1);
    		$this->db->update('is_site_settings', $data);
    	}
		else
		{
    		$data_new = array( 
			'site_url' => $data['site_url'],
    		'site_secure' => $data['site_secure'],
    		'friendly_url' => $data['friendly_url'],
    		'temporary' => $data['temporary']
    		);
    		$this->db->where('site_settings_id',1);
			$this->db->update('is_site_settings', $data_new);
		}
    }
    
    
}
?>