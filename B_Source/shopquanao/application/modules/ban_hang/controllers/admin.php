<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
      
        // load the MKho model
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->load->model('shop_kho/MKho');
        $this->load->model('MBan');
    }


    function index()
    {
        $data = $this->common_home();
        $data['warehouse'] = $this->MKho->getKho();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_ban_hang_home";
        $this->load->view($this->_container,$data);
    }
  
 	/*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        // Setting variables
        $data['title'] = "Quản lý số lượng bán hàng";
        // we are pulling a header word from language file
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

	function _fields($index = 1)
    {
        $data = array(
            'code'              => $this->input->post('code'.$index,TRUE),
            'kho_id'            => $this->input->post('giatrikho'.$index,TRUE), 
        	'total'            => $this->input->post('soluong'.$index,TRUE),       
        );
        return $data;
    }
    
    function update()
    {
    	$message_error = "";
    	$check = 0;
    	for ($i = 1; $i <= 10; $i++)
    	{
    		if (isset($_POST['code'.$i]) && isset($_POST['soluong'.$i]))
    		if ($_POST['code'.$i] != "" && $_POST['soluong'.$i] != "")
    		{
    			$product_code = $this->input->post('code'.$i,TRUE);
        		$product_id = $this->MBan->getProductByCode($product_code);
        		if (!count($product_id))
        		{
        			if ($message_error != "")
        				$message_error = $message_error.",".$product_code;
        				else $message_error = $product_code;
        			continue;
        		}
        		$check = 1;
    			$kho_id =  $this->input->post('giatrikho'.$i,TRUE);
    			if ($kho_id != -1)
    			{
    				$temp = $this->MBan->getTotalProductByIdAndKhoId($product_id['id'],$kho_id);
    				if (count($temp))
    				{
	    				$total = $temp['total'];
	    				$sold_total = $this->input->post('soluong'.$i,TRUE);
	    				if ($total < $sold_total) $total = 0;
	    					else $total  = $total - $sold_total;
	    				$data = array(
			        		'total'            => $total,       
			        	);
			        	$this->MBan->updateTotalProductByIdAndKhoId($product_id['id'],$kho_id, $data);
    				}
    			} else
    			{
    				$sold_total = $this->input->post('soluong'.$i,TRUE);
    				$warehouse = $this->MKho->getKho();
    				if (count($warehouse))
        			foreach ($warehouse as $key => $list) {
        				$kho_id = $list['kho_id'];
        				$temp = $this->MBan->getTotalProductByIdAndKhoId($product_id['id'],$kho_id);
    					if (count($temp))
    					{    					
	        				$total = $temp['total'];
	    					if ($total < $sold_total) 
	    					{
	    						$sold_total = $sold_total - $total;
	    						$total = 0;
	    					}
	    						else 
	    						{
	    							$total = $total - $sold_total;
	    							$sold_total = 0;
	    						}
	    					$data = array(
			        			'total'            => $total,       
			        		);
			        		$this->MBan->updateTotalProductByIdAndKhoId($product_id['id'],$kho_id, $data);
    					}
		        		if ($sold_total <=0) break;
        			}
    			}
    		}	
    	}
    	if ($message_error!="")
    		flashMsg("message","Sai mã sản phẩm ".$message_error." ;các mã sản phẩm còn lại cập nhật thành công.");
    		else 
    		if ($check == 1) 
    			flashMsg("message","Cập nhật thành công.");
    				else 
    					flashMsg("message","Xin mời nhập mã sản phẩm và số lượng.");
    	$data = $this->common_home();
        $data['warehouse'] = $this->MKho->getKho();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_ban_hang_home";
        $this->load->view($this->_container,$data);
    }
    
    
}// end of class
?>