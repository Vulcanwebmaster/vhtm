<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{
    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        $this->load->model('MExchange_order');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_exchange_orders';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_exchange_order_home";
        $this->load->view($this->_container,$data);
    }

    function common_home()
    {
        $data['orders'] = $this->MExchange_order->getAllOrder();
        return $data;
    }

    function Ajaxgetupdate()
    {
        $data = $this->common_home();
        $this->load->view('admin/admin_home_cont',$data);
    }

    function delete($id)
    {
        $this->MIStockGold->deleteitem('is_order', $id);
        flashMsg('success',"Deleted successfully.");
        redirect('is_exchange_orders/admin/index','refresh');
    }
    
    function _fields($id)
    {
		if ($this->input->post('src_cid') == 1) $src = "LR";
			else $src = "WU";
		if ($this->input->post('src_dst') == 1) $dst = "LR";
			else $dst = "WU";
        $data = array(
        'order_id'			=> $id,
        'c_src'       		=> $src,
        'c_dst'   	 		=> $dst,
        'amount_src'		=> $this->input->post('src_amount'),
        'status_src'		=> $this->input->post('status_src'),
        'amount_dst'		=> $this->input->post('amount_dst'),
        'account_dst'		=> $this->input->post('account_dst'),
        'status_dst'		=> $this->input->post('status_dst')
        );
        if ($this->input->post('date_src')!="") $data['date_src'] = $this->input->post('date_src');
        if ($this->input->post('date_dst')!="") $data['date_dst'] = $this->input->post('date_dst');
        return $data;
    }
    
	function edit($id=0)
    {
        if ($this->input->post('src_cid'))
        {
			$data = $this->_fields($id);
			$this->MIStockGold->updateItem("order",$data);
			redirect(base_url().'index.php/is_exchange_orders/admin','refresh');
        }
        else
        {
        	$data['page'] = $this->config->item('backendpro_template_admin') . "admin_exchange_order_edit";
        	$data['order'] = $this->MExchange_order->getOrder($id);
            $data['order_status'] = $this->MExchange_order->getOrderStatus();
        	$data['source_currencies'] = $this->MExchange_order->getSourceCurrency();
        	$data['destination_currencies'] = $this->MExchange_order->getDestinationCurrency();
        	$this->load->view($this->_container,$data);
        }
    }
    
    function search()
    {
    	$search = $this->input->post('fld_search');
    	$data['orders']=$this->MExchange_order->getSearch($search);
        $data['page'] = "admin/admin_exchange_order_home";
        $this->load->view($this->_container,$data);
    }
}
?>
