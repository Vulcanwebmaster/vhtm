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
    
	function edit($id=0)
    {
        if ($this->input->post('order_id'))
        {

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
}
?>
