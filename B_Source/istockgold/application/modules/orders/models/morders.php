<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MOrders extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
 
	 
	function getAllOrders()
	{
		$this->db->from('omc_order');
		$this->db->join('omc_customer', 'omc_order.customer_id = omc_customer.customer_id');
		$Q = $this->db->get();
		if ($Q->num_rows() > 0)
		{
			foreach ($Q->result_array() as $row)
			{
				$data[] = $row;
			}
			$Q->free_result();    
			return $data; 
		}
	}
	
	function addOrder($data,$return_id=FALSE)
    {
    	echo "Begin";
        $module_table = 'order';
        
        $this->db->insert($module_table, $data);
        
        if($return_id==TRUE)
        {
            $retuened_id=$this->db->insert_id();
            return $retuened_id;
        }
    }

	function deleteOrder($id)
	{
		$this->db->where('order_id', id_clean($id));
		$this->db->delete('omc_order');	
	}
}//end class
?>