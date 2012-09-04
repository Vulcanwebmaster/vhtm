<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Thongtingioithieu');        
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
        $data['title'] = "Quản lý thông tin giới thiệu";
        $data['gioithieu'] = $this->MGioithieu->getThongTinGioiThieu();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
    	$temp = str_replace("@$%#@", 'style="color: ',$_POST['ten']);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
    	$temp = str_replace("../../../", base_url(), $temp);
        $data = array(
            'submenu_id'   => $this->input->post('submenu_id',TRUE),
            'ten'          => $temp,
            'noidung'      => $this->input->post('noidung',TRUE)  
        );
        return $data;
    }


	function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        if ($this->input->post('ten')!='')
        {
			$data = $this->_fields();
           	$this->MGioithieu->addThongTinGioiThieu($data);
            flashMsg('success','Tạo thông tin giới thiệu thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo thông tin giới thiệu";
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_gioithieu'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_gioithieu_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tên');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	$this->bep_assets->load_asset_group('TINYMCE');
    	if ($this->input->post('submenu_id')) {
    		$id = $this->input->post('submenu_id');
    	} 
        if ($this->input->post('ten'))
        {           
		  	$this->form_validation->set_rules('ten', 'ten', 'required');
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MGioithieu->updateThongTinGioiThieu($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Thông tin giới thiệu đã được cập nhật');
		  	}
		  	else 
		  	{
			  	$data['title'] = "Sửa thông tin giới thiệu";
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
	            flashMsg('error','Bạn phải nhập tên thông tin giới thiệu');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
            $data['title'] = "Sửa thông tin giới thiệu";
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
            flashMsg('noctice','Mời bạn nhập các thông tin về thông tin giới thiệu');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_gioithieu_submenu';
        $this->MGioithieu->deleteitem($table,$id);
        flashMsg('success','Thông tin giới thiệu đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>