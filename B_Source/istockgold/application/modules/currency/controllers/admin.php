<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;
    private $cur_id;

    function __construct()
    {
        parent::__construct();
//        check('Pages');
    	$this->module='currency';
//        $this->module=basename(dirname(dirname(__FILE__)));
        // Load modules/menus/models/MMenus
        $this->load->model('menus/MMenus');
        // Load pages model
        $this->load->model('MCurrency');
        // Set breadcrumb
        $this->bep_site->set_crumb($this->lang->line('backendpro_pages'),$this->module.'/admin');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_currency_home";
        $this->load->view($this->_container,$data);
    }

    function _fields($id)
    {
        $data = array(
            'c_id'				=> $id,
            'status'			=> $this->input->post('status'.$id),
            'c_limit'			=> $this->input->post('c_limit'.$id),
            'c_max_fee'			=> $this->input->post('c_max_fee'.$id),
            'c_ex_min'          => $this->input->post('c_ex_min'.$id),
        	'c_ex_max'          => $this->input->post('c_ex_max'.$id),
            'c_reserve'			=> $this->input->post('c_reserve'.$id),
            'is_show_src'		=> $this->input->post('is_show_src'.$id),
            'is_show_dst'		=> $this->input->post('is_show_dst'.$id)
        );
        return $data;
    }
    
	function _fields_for_adding()
    {
        $data = array(
        	'c_name'			=> $this->input->post('c_name0'),
        	'c_metal_name'		=> $this->input->post('c_metal_name0'),
            'status'			=> $this->input->post('status0'),
            'c_limit'			=> $this->input->post('c_limit0'),
            'c_max_fee'			=> $this->input->post('c_max_fee0'),
        	'c_ex_min'			=> $this->input->post('c_ex_min0'),
            'c_ex_max'          => $this->input->post('c_ex_max0'),
            'c_reserve'			=> $this->input->post('c_reserve0'),
            'is_show_src'		=> $this->input->post('is_show_src0'),
            'is_show_dst'		=> $this->input->post('is_show_dst0')
        );
        return $data;
    }
    
    function _fields_for_adding_rate($src_id, $dst_id)
    {
    	$data = array(
        	'c_id_src'			=> $src_id,
        	'c_id_dst'			=> $dst_id,
            'rate_dst'			=> 1
        );
        return $data;
    }

    function common_home()
    {
        $fields = array('c_id','c_name','c_metal_name','status','c_limit','c_max_fee','c_ex_max','c_reserve','is_show_src','is_show_dst');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll($this->module,$fields, $orderby);
        $data['module'] = $this->module;
        return $data;
    }
    
    function Ajaxgetupdate()
    {
        $data = $this->common_home();
        $this->load->view('admin/admin_home_cont',$data);
    }

    function add()
    {
    	if ($this->input->post('c_name0'))
        {	
        	//Get all ID Currencies
	        $fields = array('c_id');
	        $orderby = array('c_id');
	        $data['currencies'] = $this->MIStockGold->getAll($this->module,$fields, $orderby);
	    	
	        $cur_id = array();
	        foreach ($data['currencies'] as $key => $list)
	        {
	        	array_push($cur_id, $list['c_id']);
	        }
	        //Get all ID Currencies - End
	        
	        
            $data = $this->_fields_for_adding();
            $new_id = $this->MIStockGold->addItem($this->module,$data,TRUE);
            
            foreach($cur_id as $old_id)
            {
            	$data2 = $this->_fields_for_adding_rate($new_id, $old_id);
            	$this->MIStockGold->addItem('rate',$data2);
            	
            	$data2 = $this->_fields_for_adding_rate($old_id, $new_id);
            	$this->MIStockGold->addItem('rate',$data2);
            }
            
            flashMsg('success',"Added successfully.");
            redirect( $this->module.'/admin/index','refresh');
        }
        else
        {
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_currency_add";
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }

    function edit()
    {
    	$fields = array('c_id');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll($this->module,$fields, $orderby);
    	
        $cur_id = array();
        foreach ($data['currencies'] as $key => $list)
        {
        	array_push($cur_id, $list['c_id']);
        }
        
        foreach ($cur_id as $str)
        {	
        	$data = $this->_fields($str);
            $this->MIStockGold->updateItem($this->module,$data);
    	}
        flashMsg('success',"Currencies were updated successfully.");
        redirect($this->module.'/admin/index','refresh');
    }
    	
}//end class
?>
