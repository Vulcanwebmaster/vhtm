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
		$data['danhmuc'] = $this->MDanhmuc->ListDanhMuc();	    
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
		$data['danhmuc'] = $this->MDanhmuc->listDanhMuc();	    
	    flashMsg('success','Cập nhật thông tin danh mục thành công');	
		$this->load->view($this->_container,$data);
	}
	
	
	function editChuyenMuc($id)
	{
		if($this->input->post('submit'))
		{
			$data=$this->fjx_bgcolor();
			$this->MDanhmuc->updateChuyenMuc($id,$data);
			redirect(base_url().'index.php/danhmuc/admin/listDanhMuc','refresh');
		}
		else 
		{
			$this->bep_assets->load_asset_group('TINYMCE');
			$data['danhmuc']=$this->MDanhmuc->getListDanhMuc();
			$data['chuyenmuc'] = $this->MDanhmuc->getChuyenMuc($id);
			$data['title']="Sửa thông tin chuyên mục";
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			$data['page'] = $this->config->item('backendpro_template_admin')."admin_chuyenmuc_edit";
			$data['cancel_link']= $this->module."/admin/index/";
			$this->bep_site->set_crumb($this->lang->line('kago_create_chuyenmuc'));
		    flashMsg('success','Tải thông tin chuyên mục thành công');	
			$this->load->view($this->_container,$data);
		}
	}
	
	function deleteChuyenMuc($id)
	{
		$this->MDanhmuc->deleteChuyenmuc($id);
		$this->listChuyenMuc();
	}
	
	function listChuyenMuc()
	{
		$data['chuyenmuc'] = $this->MDanhmuc->getListChuyenMuc();
		$data['title']="Danh sách chuyên mục";
		$data['module'] = $this->module;
		$data['header'] = $this->lang->line('backendpro_access_control');
		$data['page'] = $this->config->item('backendpro_template_admin')."admin_chuyenmuc_list";
		$data['cancel_link']= $this->module."/admin/index/";
		$this->bep_site->set_crumb($this->lang->line('kago_edit_chuyenmuc'));
		flashMsg('success','Tải danh sách chuyên mục thành công');	
		$this->load->view($this->_container,$data);
	}
	
	function fjx_bgcolor()
	{
		
		$noidung=$this->input->post('noidung_backup');
		
		$temp = str_replace("@$%#@", 'style="color: ',$noidung);
    	$temp = str_replace("&$%#@", 'style="background-color: ',$temp);
		$data= array(
					'ten'		  => $this->input->post('ten'),
            		'noidung'     => $temp,
            		'danhmuc'	  => $this->input->post('danhmuc')  
        );
		return $data;
	}
	
	function addChuyenMuc()
	{
		$this->bep_assets->load_asset_group('TINYMCE');
		$data['danhmuc'] = $this->MDanhmuc->getListDanhMuc();
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('ten','Tên chuyên mục','required');
			$this->form_validation->set_message('required','%s không được để trống');
			if($this->form_validation->run())
			{
				$data=$this->fjx_bgcolor();
				$this->MDanhmuc->insertChuyenMuc($data);
				$this->listChuyenMuc();
				redirect(base_url().'index.php/danhmuc/admin/listDanhMuc','refresh');
			}
			else 
			{
				$data['title']="Tạo chuyên mục mới";
				$data['module'] = $this->module;
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin')."admin_chuyemuc_create";
				$data['cancel_link']= $this->module."/admin/index/";
				$this->bep_site->set_crumb($this->lang->line('kago_create_chuyenmuc'));
			    flashMsg('error',form_error('ten'));	
				$this->load->view($this->_container,$data);
			}
		}
		else 
		{
			$data['title']="Tạo chuyên mục mới";
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			$data['page'] = $this->config->item('backendpro_template_admin')."admin_chuyemuc_create";
			$data['cancel_link']= $this->module."/admin/index/";
			$this->bep_site->set_crumb($this->lang->line('kago_create_chuyenmuc'));
		    flashMsg('notice','Vui lòng nhập thông tin cho chuyên mục');	
			$this->load->view($this->_container,$data);
		}
	}
	
	function addDanhMuc()
	{
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('ten','Tên danh mục','required');
			$this->form_validation->set_message('required','%s không được để trống');
			if($this->form_validation->run())
			{
				$this->MDanhmuc->insertDanhMuc();
				redirect(base_url().'index.php/danhmuc','refresh');
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