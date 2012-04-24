<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MProfile extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getAdmin()
    {
    	$Q = $this->db->query('SELECT * FROM `be_users` LIMIT 0 , 30');
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data = $row;
                break;
            }
        }
        $Q->free_result();
        return $data;    
    }
    
	function update($data)
    {
    	if (isset($data['password']))
    	{
		   	$this->db->where('id',1);
    		$this->db->update('be_users', $data);
    	}
		else
		{
    		$data_new = array(
			'email' => $data['email']);
    		$this->db->where('id',1);
			$this->db->update('be_users', $data_new);
		}
    }
}
?>