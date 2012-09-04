<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();
        // Check for access permission
        //check('Hoithao');        
        $this->load->model('MDanhmuc');
		$this->load->library('form_validation');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_danhmuc'),$this->module.'/admin');
    }
	
	function index()
	{
		$data['title']="Quản lý danh mục";
		$data['module'] = $this->module;
		$data['header'] = $this->lang->line('backendpro_access_control');
		$data['page'] = $this->config->item('backendpro_template_admin')."admin_danhmuc_edit";
		$data['cancel_link']= $this->module."/admin/index/";
		$data['danhmuc'] = $this->MDanhmuc->getListDanhMuc();	    
	    flashMsg('success','Tải thông tin danh mục thành công');	
		$this->load->view($this->_container,$data);
	}
	
	function _data($id)
	{
		$ten=$this->input->post('danhmuc_'.$id,true);
		$data=array(
					'id'	=>	$id,
					'ten'	=>	$ten
					);
		return $data;
	}
	
	function update()
	{
		$data['dm'] = $this->MDanhmuc->getIDs();
        $x = $data['dm'];
        foreach($x as $key => $list )
        {
         	$data = $this->_data($list['id']);	
        	$this->MDanhmuc->updateDanhMuc($data);		
        }
		
		$this->success();
	}
	
	function success()
	{
		$data['title']="Cập nhật danh mục";
		$data['module'] = $this->module;
		$data['header'] = $this->lang->line('backendpro_access_control');
		$data['page'] = $this->config->item('backendpro_template_admin')."admin_danhmuc_edit";
		$data['cancel_link']= $this->module."/admin/index/";
		$data['danhmuc'] = $this->MDanhmuc->getListDanhMuc();	    
	    flashMsg('success','Cập nhật thông tin danh mục thành công');	
		$this->load->view($this->_container,$data);
	}
	
	
	function create()
	{
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('ten','Tên danh mục','required');
			$this->form_validation->set_message('required','%s không được để trống');
			if($this->form_validation->run())
			{
				$this->MDanhmuc->insert();
				$this->index();
			}
			else 
			{
				$data['title']="Tạo danh mục mới";
				$data['module'] = $this->module;
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin')."admin_danhmuc_create";
				$data['cancel_link']= $this->module."/admin/index/";
				$this->bep_site->set_crumb($this->lang->line('kago_create_danhmuc'));
			    flashMsg('error',form_error('ten'));	
				$this->load->view($this->_container,$data);
			}
		}
		else
		{
			$data['title']="Tạo danh mục mới";
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			$data['page'] = $this->config->item('backendpro_template_admin')."admin_danhmuc_create";
			$data['cancel_link']= $this->module."/admin/index/";
			$this->bep_site->set_crumb($this->lang->line('kago_create_danhmuc'));
		    flashMsg('notice','Vui lòng nhập tên cho danh mục');	
			$this->load->view($this->_container,$data);
		}
	}
}
?>