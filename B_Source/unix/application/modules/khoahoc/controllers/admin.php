<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();       
        $this->load->model('MKhoahoc');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_khoahoc'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý khóa học";
        $data['khoahoc'] = $this->MKhoahoc->getKhoaHoc();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
        $data = array(
            'khoahoc_id'  => $this->input->post('khoahoc_id',TRUE),
        	'tieude'      => $this->input->post('tieude',TRUE),
            'mota'        => $this->input->post('mota',TRUE),
            'batdau'      => $this->input->post('batdau',TRUE),
            'ketthuc'     => $this->input->post('ketthuc',TRUE),        
            'hocphi'      => $this->input->post('hocphi',TRUE),
        	'anhdaidien'  => $this->input->post('anhdaidien',TRUE),
        	'thoigian'    => $this->input->post('thoigian',TRUE)    
        );
        return $data;
    }


	function create()
    {
        if ($this->input->post('tieude')!='')
        {
			$data = $this->_fields();
           	$this->MKhoahoc->addKhoaHoc($data);
            flashMsg('success','Tạo khóa học thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo khóa học";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_khoahoc'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập mô tả, thời gian bắt đầu kết thúc và học phí khóa học');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	if ($this->input->post('khoahoc_id')) {
    		$id = $this->input->post('khoahoc_id');
    	} 
        if ($this->input->post('tieude'))
        {   
        	$this->form_validation->set_rules('tieude', 'tieude', 'required');        
		  	$this->form_validation->set_rules('mota', 'mota', 'required');
		  	$this->form_validation->set_rules('batdau', 'batdau', 'required');  
		  	$this->form_validation->set_rules('ketthuc', 'ketthuc', 'required');     
		  	$this->form_validation->set_rules('hocphi', 'hocphi', 'required');     
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MKhoahoc->updateKhoaHoc($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Khóa học đã được update');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa khóa học";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_edit";
	            $data['khoahoc'] = $this->MKhoahoc->getInfo($id);
	            if (!count($data['khoahoc']))
	            {
	                redirect($this->module.'/khoahoc/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_khoahoc'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập mô tả, thời gian bắt đầu kết thúc và học phí khóa học');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa khóa học";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_edit";
            $data['khoahoc'] = $this->MKhoahoc->getInfo($id);
            if (!count($data['khoahoc']))
            {
                redirect($this->module.'/khoahoc/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_khoahoc'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về khóa học');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MKhoahoc->deleteitem($table,$id);
        flashMsg('success','Khóa học đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>