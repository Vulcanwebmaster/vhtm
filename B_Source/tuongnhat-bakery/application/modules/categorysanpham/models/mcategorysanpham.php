<?php
class Mcategorysanpham extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
		$this->load->helper('url');
	}
	function getCategoryRow()
	{
		return $this->db->get('b_product_category')->num_rows();
	}
	function getCategory($number, $offset)
	{
            $query =  $this->db->get('b_product_category',$number,$offset);
            return $query->result();
    }
	function getDetailCategory()
	{
		$id_category=$this->uri->segment(4);
		$this->db->where('category_id',$id_category);
		return $this->db->get('b_product_category')->result();
	}
	function updateCategory()
	{
		$id_category=$this->uri->segment(4);
		$data=(array(
				'category_name_vn'=>$this->input->post('category_name_vn'),
				'category_name_en'=>$this->input->post('category_name_en'),
				'catogories_decription_vn'=>$this->input->post('catogories_decription_vn'),
				'catogories_decription_en'=>$this->input->post('catogories_decription_en')
		));
		$this->db->where('category_id',$id_category);
		if($this->db->update('b_product_category',$data))
		{
			return true;
			
		}
		else
			{
				return FALSE;
			}
	}
	function insertCategory()
	{
		$data=(array(
				'category_name_vn'=>$this->input->post('category_name_vn'),
				'category_name_en'=>$this->input->post('category_name_en'),
				'catogories_decription_vn'=>$this->input->post('catogories_decription_vn'),
				'catogories_decription_en'=>$this->input->post('catogories_decription_en'),
				'category_image'=>$this->input->post('category_image')
		));
		if($this->db->insert('b_product_category',$data))
		{
			return true;
			
		}
		else
			{
				return FALSE;
			}
	}
	function delCategory()
	{
		$id_category=$this->uri->segment(4);
		$this->db->where('category_id',$id_category);
		if($this->db->delete('b_product_category'))
		{
			return true;
		}
		else
		{
			return FALSE;
		}
	}
}
?>