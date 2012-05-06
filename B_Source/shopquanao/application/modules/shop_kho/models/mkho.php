<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MKho extends CI_Model
{

	function __construct()
    {
        parent::__construct();
	}

    
    function getKho()
    {
         // getting all the products of the same categroy.
        $data = array();
        $this->db->order_by('kho_id','asc');
        $Q = $this->db->get('shop_kho');
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
    
	function checkOrphans($id)
    {
        $data = array();
        $this->db->where('kho_id',id_clean($id));
        $Q = $this->db->get('shop_kho');
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
    
    function addKho($data)
    {
    	$this->db->insert('shop_kho', $data);
    }
    
    function updateKho($data)
    {
   		if (isset($data['kho_id']))
    	{
		   	$this->db->where('kho_id',$data['kho_id']);
    		$this->db->update('shop_kho', $data);
    	}
		else
		{
    		$data_new = array( 
    		'kho_name' => $data['kho_name'],
			'kho_code' => $data['kho_code']
    		);
    		$this->db->where('kho_id',$data['kho_id']);
			$this->db->update('shop_kho', $data_new);
		}
    	
    	
    }
    
	function deleteitem($table, $id)
    {
        // $data = array('status' => 'inactive');
        if($table =='shop_kho')
        {
            $idname = 'kho_id';
        }    
        else 
        {
            $idname = 'id';
        }
	 $this->db->where($idname, $id)->delete($table);
    }
    
    
	function getInfo($module, $id, $lang_id=NULL)
    {
        $data = array();
        $table = $module;
        if($module=='shop_kho')
        {
            $where = 'kho_id';
        }
        else 
        {
            $where = 'id';
        }
        
        if(!empty($lang_id))
        {
            $this->db->where('lang_id', $lang_id); 
        }
        $options = array($where =>$id);
        $Q = $this->db->get_where($table,$options,1);
        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }
    
    


     /* not used
      *

    function getProduct($id){
        // getting info of single product.
        $data = array();
        $options = array('id' => id_clean($id));
        $Q = $this->db->get_where('omc_products',$options,1);
        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    function insertProduct()
    {
        $data = array(
            'name' 		=> db_clean($_POST['name']),
            'shortdesc' 	=> db_clean($_POST['shortdesc']),
            'longdesc' 		=> db_clean($_POST['longdesc'],5000),
            'status' 		=> db_clean($_POST['status'],8),
            'product_order'     => db_clean($_POST['product_order']),
            'class' 		=> db_clean($_POST['class'],30),
            'grouping' 		=> db_clean($_POST['grouping'],16),
            'category_id' 	=> id_clean($_POST['category_id']),
            'featured' 		=> db_clean($_POST['featured'],20),
            'price' 		=> db_clean($_POST['price'],16),
            'other_feature'     => db_clean($_POST['other_feature'],20),
            'thumbnail'		=> db_clean($_POST['thumbnail']),
            'image'		=> db_clean($_POST['image']),
            'lang_id'           => db_clean($_POST['lang_id']),
            'table_id'          => db_clean($_POST['table_id'])
        );
        $this->db->insert('omc_products', $data);
        //$new_table_id = $this->db->insert_id();
        // need to add cat_id if it is english
        if($_POST['table_id']==0)
        {
            $this->addproductid();
        }
    }



    function addproductid()
    {
        $table_id = $this->db->insert_id();
        $data = array(
            'table_id' =>  $table_id,
        );
        $this->db->where('id', $table_id);
        $this->db->update('omc_products', $data);
    }



    function addProduct()
    {
        $data = $this->_uploadFile();
        $this->db->insert('omc_products', $data);
        $new_table_id = $this->db->insert_id();
        if (isset($_POST['colors']))
        {
            foreach ($_POST['colors']  as $value)
            {
            $data = array('table_id' => $new_table_id,
                            'color_id' => $value);
            $this->db->insert('omc_products_colors',$data);
            }
        }
        if (isset($_POST['sizes']))
        {
            foreach ($_POST['sizes']  as $value){
            $data = array('table_id' => $new_table_id,
                            'size_id' => $value);
            $this->db->insert('omc_products_sizes',$data);
            }
        }
    }
    *
    */


 

 
}//end class
?>