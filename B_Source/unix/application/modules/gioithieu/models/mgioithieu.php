<?php
	class Mgioithieu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
	    function getThongTinGioiThieu()
	    {
	        $data = array();
	        $this->db->order_by('submenu_id','asc');
	        $Q = $this->db->get('unix_gioithieu_submenu');
	        if ($Q->num_rows() > 0)
	        {
	            foreach ($Q->result_array() as $row)
	            {
	                $data[] = $row;
	            }
	        }
	        $Q->free_result();
	        return $data;
	    }
	
	    function addThongTinGioiThieu($data)
	    {
	    	$this->db->insert('unix_gioithieu_submenu', $data);
	    }
	    
	    function updateThongTinGioiThieu($data)
	    {
	   		if (isset($data['submenu_id']))
	    	{
			   	$this->db->where('submenu_id',$data['submenu_id']);
	    		$this->db->update('unix_gioithieu_submenu', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'ten'       => $data['ten'],
		    		'noidung'   => $data['noidung']
	    		);
	    		$this->db->where('submenu_id',$data['submenu_id']);
				$this->db->update('unix_gioithieu_submenu', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_gioithieu_submenu')
	        {
	            $idname = 'submenu_id';
	        }    
	        else 
	        {
	            $idname = 'id';
	        }
		 $this->db->where($idname, $id)->delete($table);
	    }
	    
		function getInfo($id)
	    {
	        $data = array();                     
	        $options = array('submenu_id' =>$id);
	        $Q = $this->db->get_where('unix_gioithieu_submenu',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
		
		function loadListFull()
		{
			$this->db->order_by('submenu_id','desc');
			$ds=$this->db->get('unix_gioithieu_submenu');
			$list=array();
			foreach($ds->result() as $news)
			{
				$list[]=$news;
			}
			$ds->free_result();
			return $list;
		}
		
		function count()
		{
			$ds=$this->db->get('unix_gioithieu_submenu');
			$amount=$ds->num_rows();
			$ds->free_result();
			return $amount;
		}
	}
?>