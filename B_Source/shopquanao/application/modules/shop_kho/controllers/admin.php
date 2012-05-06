<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        check('Kho');        
      
        // load the MKho model
        $this->load->model('MKho');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_kho'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_kho_home";
        $this->load->view($this->_container,$data);
    }
  
 	/*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        // Setting variables
        $data['title'] = "Quanly Kho";
        $data['kho'] = $this->MKho->getKho();
        // we are pulling a header word from language file
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'kho_id'              => $this->input->post('kho_id',TRUE),
            'kho_name'            => $this->input->post('kho_name',TRUE), 
        	'kho_code'            => $this->input->post('kho_code',TRUE),       
        );
        return $data;
    }


function create()
    {
        if ($this->input->post('kho_name'))
        {
            $rules['kho_name'] = 'required';
            $rules['kho_code'] = 'required';                    
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE)
            {
                $this->form_validation->output_errors();
                //redirect($this->module.'/admin/create');
                $data['title'] = "Tạo Kho";
                // Set breadcrumb
                $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_kho'),$this->module.'/admin/create');
                $data['header'] = $this->lang->line('backendpro_access_control');
                $data['page'] = $this->config->item('backendpro_template_admin') . "admin_kho_create";
                $data['cancel_link']= $this->module."/admin/index/";
                $data['module'] = $this->module;
                $this->load->view($this->_container,$data);
            }
            else
            {
                
                $data = $this->_fields();
                $this->MKho->addKho($data);
                //$this->MCustomers->addCustomer();
                flashMsg('success','Kho được tạo');
                redirect($this->module.'/admin/index','refresh');
            }
        }
        else
        {
            $data['title'] = "Tạo Kho";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_kho'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_kho_create";
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
  

    function edit($id=0)
    {
        if ($this->input->post('kho_name'))
        {
            $rules['kho_name'] = 'required';
            $rules['kho_code'] = 'required';
            //$rules['passconf'] =  'required';
           
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE)
            {
                $this->form_validation->output_errors();
                $customer_id = $this->input->post('kho_id');
                redirect($this->module.'/admin/edit/'.$kho_id,'refresh');
            }
            else
            {
                $data = $this->_fields();
                $this->MKho->updateKho($data);
                //$this->MCustomers->updateCustomer();
                flashMsg('success','Kho đã được sửa');
                redirect($this->module.'/admin/index','refresh');
            }
        }
        else
        {
            $data['title'] = "Sửa Kho";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_kho_edit";
            $data['kho'] = $this->MKho->getInfo($this->module,$id);
            //$data['customer'] = $this->MCustomers->getCustomer($id);
            if (!count($data['kho']))
            {
                redirect($this->module.'/kho/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_kho'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
  

    function delete($id)
    {
        /**
         * When you delete customer, it will affect on omc_order table and it will affect omc_order_table_items
         * Check if the customer has orders, if yes, then go back with warning to delete the order first.
         *
         */
        $order_orphans = $this->MKho->checkOrphans($id);
        if (count($order_orphans)==0)
        {
            // $this->session->set_userdata($order_orphans);
            flashMsg('warning','Kho không tồn tại');
            flashMsg('warning',$order_orphans);
            redirect('shop_kho/admin/index/','refresh');
        }
        else
        {
            $table =$this->module;
            $this->MKho->deleteitem($table,$id);
            //$this->MCustomers->deleteCustomer($id);
            flashMsg('success','Kho đã bị xóa');
            redirect($this->module.'/admin/index','refresh');
        }
    }
    
    
    
    
    
    
    
    
    
    

}// end of class
?>