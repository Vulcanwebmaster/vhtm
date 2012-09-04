<?php
	class MDangky extends CI_Model
	{
		function construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getDangKy()
	    {
	        $data = array();
	        $this->db->order_by('dangky_id','asc');
	        $Q = $this->db->get('unix_dangky');
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
		
		function register()
		{
			$data=array(
						'hoten'=>$this->input->post('hoten'),
						'truong'=>$this->input->post('truonghoc'),
						'lop'=>$this->input->post('lop'),
						'phuhuynh'=>$this->input->post('phuhuynh'),
						'dienthoai'=>$this->input->post('dienthoai'),
						'ten'=>$this->input->post('ten')
			);
			$this->db->set('ngaythang','now()',false);
			if ($this->db->insert('unix_dangky',$data))
				return true;
			else return false;
		}
		
	}
?>