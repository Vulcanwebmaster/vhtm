<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Hoithao');        
        $this->load->model('MHoithao');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_hoithao'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoithao_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý hội thảo";
        $data['hoithao'] = $this->MHoithao->getHoiThao();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
    	$temp = str_replace("@$%#@", 'style="color: ',$_POST['noidung_backup']);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
    	$temp = str_replace("../../../", base_url(), $temp);
    	
    	$anhdaidien = $this->input->post('anhdaidien',TRUE);
    	$tmp = strstr(strstr($anhdaidien, "src=\"../../../"),"../../../");
    	$pos = strpos($tmp, "\"");
    	$link = substr($tmp, 0, $pos);
    	$link = str_replace("../../../", "", $link);
    	
        $data = array(
            'hoithao_id'   => $this->input->post('hoithao_id',TRUE),
            'tieude'       => $this->input->post('tieude',TRUE),
            'noidung'      => $temp,
            'thoigian'     => $this->input->post('thoigian',TRUE),        
            'phanhoi'      => $this->input->post('phanhoi',TRUE),
            'anhdaidien'   => $link    
        );
        return $data;
    }


	function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        if ($this->input->post('noidung')!='')
        {
			$data = $this->_fields();
           	$this->MHoithao->addHoiThao($data);
            flashMsg('success','Tạo hội thảo thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo hội thảo";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_hoithao'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoithao_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tiêu đề,nội dung và thời gian hội thảo');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	$this->bep_assets->load_asset_group('TINYMCE');
    	if ($this->input->post('hoithao_id')) {
    		$id = $this->input->post('hoithao_id');
    	} 
        if ($this->input->post('noidung'))
        {           
		  	$this->form_validation->set_rules('tieude', 'tieude', 'required');
		  	$this->form_validation->set_rules('noidung', 'noidung', 'required');  
		  	$this->form_validation->set_rules('thoigian', 'thoigian', 'required');      
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MHoithao->updateHoiThao($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Hội thảo đã được update');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa hội thảo";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoithao_edit";
	            $data['hoithao'] = $this->MHoithao->getInfo($id);
	            if (!count($data['hoithao']))
	            {
	                redirect($this->module.'/hoithao/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_hoithao'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập tiêu đề,nội dung và thời gian hội thảo');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa hội thảo";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_hoithao_edit";
            $data['hoithao'] = $this->MHoithao->getInfo($id);
            if (!count($data['hoithao']))
            {
                redirect($this->module.'/hoithao/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_hoithao'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về hội thảo');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MHoithao->deleteitem($table,$id);
        flashMsg('success','Hội thảo đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>