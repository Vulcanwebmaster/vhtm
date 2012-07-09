<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();       
        $this->load->model('Mtintuc');
        $this->module=basename(dirname(dirname(__FILE__)));      
       // $this->bep_site->set_crumb($this->lang->line('backendpro_ql_khoahoc'),$this->module.'/admin');
        $this->load->library('form_validation');
    }
    
    function index()
    {
    	//$data = $this->common_home();
    	$data['tintuc']=$this->Mtintuc->loadListFull();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_tintuc_home";
        $data['title']='Tin tức';
        $this->load->view($this->_container,$data);
    }
    
    function _field()
    {
    	$data=array('tieude'=>$this->input->post('tieude'),
    				'alias'=>$this->input->post('alias'),
    				'noidung'=>$this->input->post('noidung'),
    				'ngaythang'=>$this->input->post('ngaythang'));
    	return $data;
    }
    
    function create()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
    	$this->form_validation->set_rules('noidung','Nội dung','required|trim');
		$this->form_validation->set_rules('tieude','Tiêu đề','required|trim');
		$this->form_validation->set_rules('alias','Alias','required|trim');
		$this->form_validation->set_message('required','Mục %s không được để trống');
		
		if ($this->form_validation->run())
		{
	    	$input=$this->_field();
	    	$this->Mtintuc->insertNews($input);
	    	flashMsg('success','Tạo tin mới thành công');
	        redirect($this->module.'/admin/index','refresh');
		}
		else 
		{
			$data['page'] = $this->config->item('backendpro_template_admin') . "admin_tintuc_create";
	    	$data['title']='Tạo tin mới';
	    	$data['cancel_link']= $this->module."/admin/index/";
	        $this->load->view($this->_container,$data);
		}
    }
    
    function delete($id)
    {
    	$this->Mtintuc->deleteNews($id);
    	redirect($this->module.'/admin/index','refresh');
    }
    
    function edit($id=0)
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
    	$this->form_validation->set_rules('noidung','Nội dung','required|trim');
		$this->form_validation->set_rules('tieude','Tiêu đề','required|trim');
		$this->form_validation->set_rules('alias','Alias','required|trim');
		$this->form_validation->set_message('required','Mục %s không được để trống');
		
		if ($this->form_validation->run())
		{
			$input=$this->_field();
			$this->Mtintuc->updateNews($id,$input);
			flashMsg('success','Cập nhật tin thành công');
	        redirect($this->module.'/admin/index','refresh');
		}
		else 
		{
			$data['tintuc']=$this->Mtintuc->getDetailByID($id);
	    	$data['page'] = $this->config->item('backendpro_template_admin') . "admin_tintuc_edit";
	    	$data['title']='Sửa tin';
	    	$data['cancel_link']= $this->module."/admin/index/";
	        $this->load->view($this->_container,$data);
		}
    }
}
?>