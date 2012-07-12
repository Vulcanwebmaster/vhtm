<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Loaisach');        
        $this->load->model('MLoaiKhoaHoc');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb("Quản lý loại khóa học",$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaikhoahoc_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý loại khóa học";
        $data['loaikhoahoc'] = $this->MLoaiKhoaHoc->getLoaiKhoaHoc();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'loaikhoahoc_id'   => $this->input->post('loaikhoahoc_id',TRUE),
            'tenloai'       => $this->input->post('tenloai',TRUE),
        );
        return $data;
    }


	function create()
    {
        if ($this->input->post('tenloai')!='')
        {
			$data = $this->_fields();
           	$this->MLoaiKhoaHoc->addLoaiKhoaHoc($data);
            flashMsg('success','Tạo loại khóa học thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo loại khóa học";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." "."loại khóa học",$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaikhoahoc_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tên loại');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	if ($this->input->post('loaikhoahoc_id')) {
    		$id = $this->input->post('loaikhoahoc_id');
    	} 
        if ($this->input->post('tenloai'))
        {           
		  	$this->form_validation->set_rules('tenloai', 'tenloai', 'required');
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MLoaiKhoaHoc->updateLoaiKhoaHoc($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Loại khóa học đã được cập nhật');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa loại khóa học";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaikhoahoc_edit";
	            $data['loaisach'] = $this->MLoaisach->getInfo($id);
	            if (!count($data['loaisach']))
	            {
	                redirect($this->module.'/loaisach/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." "."loại khóa học",$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập tên loại khóa học');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa loại khóa học";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_loaikhoahoc_edit";
            $data['loaisach'] = $this->MLoaiKhoaHoc->getInfo($id);
            if (!count($data['loaisach']))
            {
                redirect($this->module.'/loaisach/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." "."loại khóa học",$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về loại khóa học');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MLoaiKhoaHoc->deleteitem($table,$id);
        flashMsg('success','Loại khóa học đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>