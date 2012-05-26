<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Loaisach');        
        $this->load->model('MLoaisach');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_loaisach'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaisach_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý loại sách";
        $data['loaisach'] = $this->MLoaisach->getLoaiSach();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'loaisach_id'   => $this->input->post('loaisach_id',TRUE),
            'tenloai'       => $this->input->post('tenloai',TRUE),
            'mota'          => $this->input->post('mota',TRUE)  
        );
        return $data;
    }


	function create()
    {
        if ($this->input->post('tenloai')!='')
        {
			$data = $this->_fields();
           	$this->MLoaisach->addLoaiSach($data);
            flashMsg('success','Tạo loại sách thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo loại sách";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_loaisach'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaisach_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tên loại');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	if ($this->input->post('loaisach_id')) {
    		$id = $this->input->post('loaisach_id');
    	} 
        if ($this->input->post('tenloai'))
        {           
		  	$this->form_validation->set_rules('tenloai', 'tenloai', 'required');
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MLoaisach->updateLoaiSach($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Loại sách đã được cập nhật');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa loại sách";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaisach_edit";
	            $data['loaisach'] = $this->MLoaisach->getInfo($id);
	            if (!count($data['loaisach']))
	            {
	                redirect($this->module.'/loaisach/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_loaisach'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập tên loại sách');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa loại sách";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaisach_edit";
            $data['loaisach'] = $this->MLoaisach->getInfo($id);
            if (!count($data['loaisach']))
            {
                redirect($this->module.'/loaisach/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_loaisach'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về loại sách');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MLoaisach->deleteitem($table,$id);
        flashMsg('success','Loại sách đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>