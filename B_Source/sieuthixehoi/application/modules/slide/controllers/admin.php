<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mslide');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mslide->getRowByColumn('slide','id','1');
				$data['title']='Sửa slide ảnh';
				$data['bcCurrent']='slide ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('anh1'=>$this->input->post('anh1'),
						 'anh2'=>$this->input->post('anh2'),
						 'anh3'=>$this->input->post('anh3'),
						 );
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('anh1','Ảnh 1','required|trim');
				
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mslide->updateRowByColumn('slide','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mslide->getRowByColumn('slide','id',$id);
				$data['title']='Sửa Slide ảnh';
				$data['bcCurrent']='slide ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
?>