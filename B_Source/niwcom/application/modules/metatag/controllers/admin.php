<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mmetatag');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/niwcom/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mmetatag->getRowByColumn('metatag','id','1');
				$data['title']='Sửa Metatag';
				$data['bcCurrent']='Metatag';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'meta_home'=>$this->input->post('meta_home'),
						'meta_tintuc'=>$this->input->post('meta_tintuc'),
						'meta_gioithieu'=>$this->input->post('meta_gioithieu'),
						'meta_dichvu'=>$this->input->post('meta_dichvu'),
						'meta_sanpham'=>$this->input->post('meta_sanpham'),
						'meta_lienhe'=>$this->input->post('meta_lienhe'),
						);
			return $input;
		}
	
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('meta_home','meta_home 1','required|trim');
				
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mmetatag->updateRowByColumn('metatag','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mmetatag->getRowByColumn('metatag','id',$id);
				$data['title']='Sửa Metatag';
				$data['bcCurrent']='Metatag';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
	}
