<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Sach');        
        $this->load->model('MSach');
        $this->load->model('loaisach/MLoaisach');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_sach'),$this->module.'/admin');
    }


    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sach_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý sách";
        $data['sach'] = $this->MSach->getSach();
        $data['cacloaisach'] = $this->MLoaisach->getLoaiSachDropDown();
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields()
    {
    	$temp = str_replace("@$%#@", 'style="color: ',$_POST['mota']);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
    	$temp = str_replace("../../../", base_url(), $temp);
    	
    	$anhdaidien = $this->input->post('anhdaidien',TRUE);
    	$tmp = strstr(strstr($anhdaidien, "src=\"../../../"),"../../../");
    	$pos = strpos($tmp, "\"");
    	$link = substr($tmp, 0, $pos);
    	$link = str_replace("../../../", "", $link);
    	
        $data = array(
            'sach_id'     => $this->input->post('sach_id',TRUE),
            'tensach'     => $this->input->post('tensach',TRUE),
            'mota'        => $temp,
        	'anhdaidien'  => $link,
            'loaisach_id' => $this->input->post('loaisach_id',TRUE),        
            'tacgia'      => $this->input->post('tacgia',TRUE)    
        );
        return $data;
    }


	function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        if ($this->input->post('tensach')!='')
        {
			$data = $this->_fields();
           	$this->MSach->addSach($data);
            flashMsg('success','Tạo sách thành công');
            redirect($this->module.'/admin/index','refresh');
        }
        else
        {
            $data['title'] = "Tạo sách";
            $data['cacloaisach'] = $this->MLoaisach->getLoaiSachDropDown();
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_sach'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sach_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập tiêu đề,nội dung và thời gian sách');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }
  
    function edit($id=0)
    {   
    	$this->bep_assets->load_asset_group('TINYMCE');
    	if ($this->input->post('sach_id')) {
    		$id = $this->input->post('sach_id');
    	} 
        if ($this->input->post('tensach'))
        {           
		  	$this->form_validation->set_rules('tensach', 'tensach', 'required');
		  	$this->form_validation->set_rules('mota', 'mota', 'required');  
		  	$this->form_validation->set_rules('loaisach_id', 'loaisach_id', 'required');      
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MSach->updateSach($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Sách đã được update');
		  	}
		  	else 
		  	{
		  		$data['cacloaisach'] = $this->MLoaisach->getLoaiSachDropDown();
			  	$data['title'] = "Sửa sách";
	            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sach_edit";
	            $data['sach'] = $this->MSach->getInfo($id);
	            if (!count($data['sach']))
	            {
	                redirect($this->module.'/sach/index','refresh');
	            }
	            $data['header'] = $this->lang->line('backendpro_access_control');
	            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_sach'),$this->module.'/admin/edit');
	            $data['cancel_link']= $this->module."/admin/index/";
	            $data['module'] = $this->module;
	            flashMsg('error','Bạn phải nhập tiêu đề,nội dung và thời gian sách');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
        	$data['cacloaisach'] = $this->MLoaisach->getLoaiSachDropDown();
            $data['title'] = "Sửa sách";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_sach_edit";
            $data['sach'] = $this->MSach->getInfo($id);
            if (!count($data['sach']))
            {
                redirect($this->module.'/sach/index','refresh');
            }
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_edit')." ".$this->lang->line('kago_sach'),$this->module.'/admin/edit');
            $data['cancel_link']= $this->module."/admin/index/";
            $data['module'] = $this->module;
            flashMsg('noctice','Mời bạn nhập các thông tin về sách');
            $this->load->view($this->_container,$data);
        }
    }
  
    function delete($id)
    {
        $table ='unix_'.$this->module;
        $this->MSach->deleteitem($table,$id);
        flashMsg('success','Sách đã được xóa thành công.');
        redirect($this->module.'/admin/index','refresh');
    }
}// end of class
?>