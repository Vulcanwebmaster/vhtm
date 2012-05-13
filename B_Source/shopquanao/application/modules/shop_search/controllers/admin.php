<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Kho');        
      
        // load the MKho model
        $this->load->model('MSearch');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_search'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
       // $data['gtsearch'] = array('tensanpham'=>'search tensanpham','masanpham'=>'search masanpham','makho'=>'search makho');
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_search_home";
        $this->load->view($this->_container,$data);
    }
  
 	/*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        // Setting variables
        $data['title'] = "Tìm kiếm sản phẩm";
        $data['makho'] = '';
    	$data['masanpham'] = '';
    	$data['tensanpham'] = '';
       
        //$data['kho'] = $this->MKho->getKho();
        
        //Author tienlx: pagination reviews
        $config['base_url'] = base_url()."index.php"."/"."shop_search"."/"."admin"."/"."index";
        $config['total_rows']= $this->MSearch->getNumSearch('','','');
       	$config['per_page']= '10';
        $config['uri_segment'] = 4; 
        $config['cur_tag_open'] = '<span style="color:red">';
        $config['cur_tag_close'] = '</span>';
          

        $this->pagination->initialize($config);		
        $data['pagination'] = $this->pagination->create_links();        
        //End author tienlx
        
        $data['search']=$this->MSearch->getSearch($config['per_page'],$this->uri->segment('4'),'','','');
        
        // we are pulling a header word from language file
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'makho'     => $this->input->post('makho',TRUE),
        	'masanpham'=> $this->input->post('masanpham',TRUE),
        	'tensanpham' => $this->input->post('tensanpham',TRUE)          
        );
        return $data;
    }
    
    function search()
    {
 		$tensanpham= $this->input->post('tensanpham',TRUE);
    	$masanpham= $this->input->post('masanpham',TRUE);
    	$makho= $this->input->post('makho',TRUE);
    	$data['makho'] = $makho;
    	$data['masanpham'] = $masanpham;
    	$data['tensanpham'] = $tensanpham;

    	//Author tienlx: pagination reviews
        $config['base_url'] = base_url()."index.php"."/"."shop_search"."/"."admin"."/"."search";
        $config['total_rows']= $this->MSearch->getNumSearch($tensanpham,$masanpham,$makho);
       	$config['per_page']= '10';
        $config['uri_segment'] = 4; 
        $config['cur_tag_open'] = '<span style="color:red">';
        $config['cur_tag_close'] = '</span>';
          
        $this->pagination->initialize($config);		
        $data['pagination'] = $this->pagination->create_links();        
        //End author tienlx
    	
    	
    	$data['search']=$this->MSearch->getSearch($config['per_page'],$this->uri->segment('4'),$tensanpham,$masanpham,$makho);
    	
        $data['title'] = "Tìm Kiếm";
        // Set breadcrumb
        $this->bep_site->set_crumb($this->lang->line('kago_search')." ".$this->lang->line('kago_search'),$this->module.'/admin/search');
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_search_home";
        
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
           
               /* flashMsg('success','Kho được tạo');
                redirect($this->module.'/admin/index','refresh');*/
             	
    }
    
    



}// end of class
?>