<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mslidefooter');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mslidefooter->getRowByColumn('slide1','id','1');
				$data['title']='Sửa slide ảnh Footer';
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
						 'anh4'=>$this->input->post('anh4'),
						 'anh5'=>$this->input->post('anh5'),
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
				if ($this->Mslidefooter->updateRowByColumn('slide1','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mslidefooter->getRowByColumn('slide1','id',$id);
				$data['title']='Sửa Slide ảnh Footer';
				$data['bcCurrent']='slide ảnh';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
?>