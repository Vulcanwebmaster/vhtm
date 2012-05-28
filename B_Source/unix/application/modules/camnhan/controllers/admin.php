<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Camnhan');        
        $this->load->model('MCamnhan');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_camnhan'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_camnhan_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý cảm nhận";
        $data['camnhan'] = $this->MCamnhan->getCamNhan();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'camnhan_id'   => $this->input->post('camnhan_id',TRUE),
            'noidung'      => $this->input->post('noidung',TRUE),
            'ngaythang'    => $this->input->post('ngaythang',TRUE),        
            'nguoidang'    => $this->input->post('nguoidang',TRUE)   
        );
        return $data;
    }


	function create()
    {
        if ($this->input->post('noidung')!='')
        {
			$data = $this->_fields();
           	$this->MCamnhan->addCamNhan($data);
            flashMsg('success','Tạo cảm nhận thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo cảm nhận";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_camnhan'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_camnhan_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tiêu đề,nội dung và thời gian cảm nhận');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	if ($this->input->post('camnhan_id')) {
    		$id = $this->input->post('camnhan_id');
    	} 
        if ($this->input->post('noidung'))
        {           
		  	$this->form_validation->set_rules('noidung', 'noidung', 'required');  
		  	$this->form_validation->set_rules('ngaythang', 'ngaythang', 'required');  
		  	$this->form_validation->set_rules('nguoidang', 'nguoidang', 'required');  
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MCamnhan->updateCamNhan($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Cảm nhận đã được update');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa cảm nhận";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_camnhan_edit";
	            $data['camnhan'] = $this->MCamnhan->getInfo($id);
	            if (!count($data['camnhan']))
	            {
	                redirect($this->module.'/camnhan/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_camnhan'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập tiêu đề,nội dung và thời gian cảm nhận');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa cảm nhận";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_camnhan_edit";
            $data['camnhan'] = $this->MCamnhan->getInfo($id);
            if (!count($data['camnhan']))
            {
                redirect($this->module.'/camnhan/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_camnhan'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về cảm nhận');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MCamnhan->deleteitem($table,$id);
        flashMsg('success','Cảm nhận đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>