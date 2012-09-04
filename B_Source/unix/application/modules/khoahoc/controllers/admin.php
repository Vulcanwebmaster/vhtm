<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();       
        $this->load->model('MKhoahoc');
        $this->load->model('loaikhoahoc/MLoaiKhoaHoc');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_khoahoc'),$this->module.'/admin');
        $this->load->library('form_validation');
		$this->load->helper('ckeditor');
    }
	
	

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_home";
        $this->load->view($this->_container,$data);
    }
	
  	function home()
	{
		$this->bep_assets->load_asset_group('TINYMCE');
		//$data=$this->_ckeditor();
		$data['title']="Cập nhật khóa học mặc định";
		$data['module'] = $this->module;
		$data['header'] = $this->lang->line('backendpro_access_control');
		$data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_default";
		$data['khoahoc'] = $this->MKhoahoc->get_KhoaHoc_Default();
			    
	    flashMsg('noctice','Mời bạn nhập các thông tin về khóa học mặc định');	
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
    	$temp = str_replace("@$%#@", 'style="color: ',$_POST['mota_backup']);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
    	$temp = str_replace("../../../", base_url(), $temp);
    	
    	$anhdaidien = $this->input->post('anhdaidien',TRUE);
    	$tmp = strstr(strstr($anhdaidien, "src=\"../../../"),"../../../");
    	$pos = strpos($tmp, "\"");
    	$link = substr($tmp, 0, $pos);
    	$link = str_replace("../../../", "", $link);
    	
        $data = array(
            'khoahoc_id'  => $this->input->post('khoahoc_id',TRUE),
        	'tieude'      => $this->input->post('tieude',TRUE),
            'mota'        => $this->input->post('mota',TRUE),
            'batdau'      => $this->input->post('batdau',TRUE),
            'ketthuc'     => $this->input->post('ketthuc',TRUE),        
            'hocphi'      => $this->input->post('hocphi',TRUE),
        	'anhdaidien'  => '../'.$link,
        	'loaikhoahoc_id' => $this->input->post('loaikhoahoc_id',TRUE),        
        	'thoigian'    => $this->input->post('thoigian',TRUE)    
        );
        return $data;
    }

	function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
		$this->form_validation->set_rules('mota','Mô tả','required|trim');
		$this->form_validation->set_rules('tieude','Tiêu đề','required|trim');
		$this->form_validation->set_message('required','Mục %s không được để trống');
        if ($this->form_validation->run())//$this->input->post('tieude')!='')
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
            $data['cacloaikhoahoc'] = $this->MLoaiKhoaHoc->getLoaiKhoaHocDropDown();
            $this->bep_site->set_crumb($this->lang->line('kago_create')." ".$this->lang->line('kago_khoahoc'),$this->module.'/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_create";
            $data['cancel_link']= $this->module."/admin/index/";
            flashMsg('notice','Mời bạn nhập mô tả, thời gian bắt đầu kết thúc và học phí khóa học');
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
    }

  	function fjx_bgcolor()
	{
		$noidung=$this->input->post('noidung_backup');
		//echo $noidung;die();
		
		$temp = str_replace("@$%#@", 'style="color: ',$noidung);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
		//echo $temp;die();
		$data= array(
            'tieude'       => $this->input->post('tieude'),
            'noidung'      => $temp,  
        );
		return $data;
	}
	function update($id)
	{
		$this->bep_assets->load_asset_group('TINYMCE');
		if ($this->input->post('tieude'))
        {   
        	$this->form_validation->set_rules('noidung','Nội dung','required');
		  	if($this->form_validation->run()==true)
		  	{
		  		$data=$this->fjx_bgcolor();		
                $this->MKhoahoc->update_KhoaHoc_Default($id,$data);
                $this->bep_assets->load_asset_group('TINYMCE');
				$data['title']="Cập nhật khóa học mặc định";
				$data['module'] = $this->module;
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_default";
				$data['khoahoc'] = $this->MKhoahoc->get_KhoaHoc_Default();
                flashMsg('success','Khóa học mặc định đã được cập nhật thành công');
				$this->load->view($this->_container,$data);
		  	}
		  	else 
		  	{
			  	$this->bep_assets->load_asset_group('TINYMCE');
				$data['title']="Cập nhật khóa học mặc định";
				$data['module'] = $this->module;
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_khoahoc_default";
				$data['khoahoc'] = $this->MKhoahoc->get_KhoaHoc_Default();
	            flashMsg('error','Bạn phải nhập đầy đủ nội dung của khóa học');
	            $this->load->view($this->_container,$data);
		  	}
        }
        else
        {
        	redirect($this->module.'/admin/home','refresh');
        }
		
		
	}
    function edit($id=0)
    {   
    	$this->bep_assets->load_asset_group('TINYMCE');
    	if ($this->input->post('id')) {
    		$id = $this->input->post('id');
    	} 
        if ($this->input->post('tieude'))
        {   
        	$this->form_validation->set_rules('mota',    'mota',    'required');
		  	if($this->form_validation->run())
		  	{
				$data = $this->_fields();
                $this->MKhoahoc->updateKhoaHoc($data);
                redirect($this->module.'/admin/index','refresh');
                flashMsg('success','Khóa học đã được update');
		  	}
		  	else 
		  	{
		  		$data['cacloaikhoahoc'] = $this->MLoaiKhoaHoc->getLoaiKhoaHocDropDown();
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
            $data['cacloaikhoahoc'] = $this->MLoaiKhoaHoc->getLoaiKhoaHocDropDown();
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