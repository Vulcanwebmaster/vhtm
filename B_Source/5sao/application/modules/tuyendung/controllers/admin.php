<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mtuyendung');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mtuyendung->getRowByColumn('tuyendung','id','1');
				$data['title']='Sửa tuyển dụng';
				$data['bcCurrent']='tuyển dụng';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('noidung_v'=>$this->input->post('noidung_v'),
						'noidung_e'=>$this->input->post('noidung_e'));
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('noidung_v','Nội dung (Việt)','required|trim');
				
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mtuyendung->updateRowByColumn('tuyendung','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['listCategories']=$this->Mtuyendung->getListFull('danhmuc');
				$data['info']=$this->Mtuyendung->getRowByColumn('tuyendung','id',$id);
				$data['title']='Sửa tuyển dụng';
				$data['bcCurrent']='tuyển dụng';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mtuyendung->deleteRowByColumn('tuyendung','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>