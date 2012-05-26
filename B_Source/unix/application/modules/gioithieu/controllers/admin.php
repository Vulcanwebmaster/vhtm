<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Gioithieu');        
        $this->load->model('MGioithieu');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_gioithieu'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_gioithieu_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý tin giới thiệu";
        $data['gioithieu'] = $this->MGioithieu->getGioiThieu();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'gioithieu_id'       => $this->input->post('gioithieu_id',TRUE),
            'noidung'            => $this->input->post('noidung',TRUE)     
        );
        return $data;
    }


	function create()
    {
        if ($this->input->post('noidung')!='')
        {
			$data = $this->_fields();
           	$this->MGioithieu->addGioiThieu($data);
            flashMsg('success','Tạo tin giới thiệu thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo tin giới thiệu";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_gioithieu'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_gioithieu_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập vào nội dung tin giới thiệu');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	if ($this->input->post('gioithieu_id')) {
    		$id = $this->input->post('gioithieu_id');
    	} 
        if ($this->input->post('noidung'))
        {           
		  	$this->form_validation->set_rules('noidung', 'noidung', 'required');    
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MGioithieu->updateGioiThieu($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Tin giới thiệu đã được update');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa tin giới thiệu";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_gioithieu_edit";
	            $data['gioithieu'] = $this->MGioithieu->getInfo($id);
	            if (!count($data['gioithieu']))
	            {
	                redirect($this->module.'/gioithieu/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_gioithieu'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập nội dung');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa tin giới thiệu";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_gioithieu_edit";
            $data['gioithieu'] = $this->MGioithieu->getInfo($id);
            if (!count($data['gioithieu']))
            {
                redirect($this->module.'/gioithieu/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_gioithieu'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập thông tin giới thiệu');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MGioithieu->deleteitem($table,$id);
        flashMsg('success','Tin giới thiệu đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>