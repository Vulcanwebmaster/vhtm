<?php
class Msanpham extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
		$this->load->helper('url');
	}
	
	function getProduct()
	{
		$result=$this->db->get('b_product');
		return $result->result();
	}
	function getProductRow()
	{
		return $this->db->get('b_product')->num_rows();
	}
	function getProducts($number, $offset){
            $query =  $this->db->get('b_product',$number,$offset);
            return $query->result();
    }
	function detailProduct()
	{
		$id_product=$this->uri->segment(4);
		$this->db->where('product_id',$id_product);
		$result=$this->db->get('b_product');
		return $result->result();
		
	} 
	function updateProduct()
	{
		
		$id_product=$this->input->post('id');
	
		$data=(array(
			 'category_id'=>$this->input->post('category_id'),
			 'product_name_en'=>$this->input->post('name_en'),
			 'product_name_vn'=>$this->input->post('name_vn'),
			 'product_units'=>$this->input->post('product_units'),
			 'product_cartons'=>$this->input->post('product_cartons'),
			 'product_sales_name_vn'=>$this->input->post('product_sales_name_vn'),
			 'product_sales_name_en'=>$this->input->post('product_sales_name_en'),
			 'product_introductions_en'=>$this->input->post('product_introductions_en'),
			 'product_introductions_vn'=>$this->input->post('product_introductions_vn'),
			 'product_convection_oven_en'=>$this->input->post('product_convection_oven_en'),
			 'product_convection_oven_vn'=>$this->input->post('product_convection_oven_vn'),
			 'product_rotary_oven_vn'=>$this->input->post('product_rotary_oven_vn'),
			 'product_rotary_oven_en'=>$this->input->post('product_rotary_oven_en'),
			 'product_nutrient_content_en'=>$this->input->post('product_nutrient_content_en'),
			 'product_nutrient_content_vn'=>$this->input->post('product_nutrient_content_vn'),
			 'product_new'=>$this->input->post('product_new'),
			 'product_featured'=>$this->input->post('product_featured'),
			 'product_img'=>$this->input->post('product_img'),
			 'product_img_award'=>$this->input->post('product_img_award')
		));
		$this->db->where('product_id',$id_product);
		if($this->db->update('b_product',$data))
		{
			return true;
		}
		else
			{
				return FALSE;
			}
	}
	function getCategoryProduct()
	{
		return $this->db->get('b_product_category')->result();
	}
	function insertProduct()
	{
			$data=(array(
			 'category_id'=>$this->input->post('myselect'),
			 'product_name_en'=>$this->input->post('name_en'),
			 'product_name_vn'=>$this->input->post('name_vn'),
			 'product_units'=>$this->input->post('product_units'),
			 'product_cartons'=>$this->input->post('product_cartons'),
			 'product_sales_name_vn'=>$this->input->post('product_sales_name_vn'),
			 'product_sales_name_en'=>$this->input->post('product_sales_name_en'),
			 'product_introductions_en'=>$this->input->post('product_introductions_en'),
			 'product_introductions_vn'=>$this->input->post('product_introductions_vn'),
			 'product_convection_oven_en'=>$this->input->post('product_convection_oven_en'),
			 'product_convection_oven_vn'=>$this->input->post('product_convection_oven_vn'),
			 'product_rotary_oven_vn'=>$this->input->post('product_rotary_oven_vn'),
			 'product_rotary_oven_en'=>$this->input->post('product_rotary_oven_en'),
			 'product_nutrient_content_en'=>$this->input->post('product_nutrient_content_en'),
			 'product_nutrient_content_vn'=>$this->input->post('product_nutrient_content_vn'),
			 'product_new'=>$this->input->post('product_new'),
			 'product_featured'=>$this->input->post('product_featured'),
			 'product_img'=>$this->input->post('product_img'),
			 'product_img_award'=>$this->input->post('product_img_award')
		));
		if($this->db->insert('b_product',$data))
		{
			return true;
		}
		else
			{
				return FALSE;
			}
	}
	function delProduct()
	{
		$id_product=$this->uri->segment(4);
		$this->db->where('product_id',$id_product);
		if($this->db->delete('b_product'))
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