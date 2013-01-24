<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mthongtinlienhe');
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
				$data['info']=$this->Mthongtinlienhe->getRowByColumn('ttlienhe','id','1');
				$data['title']='Sửa';
				$data['bcCurrent']='Thông tin liên hệ';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('diachi'=>$this->input->post('diachi'),
						 'diachie'=>$this->input->post('diachie'),
						 'sdt'=>$this->input->post('sdt'),
						 'email'=>$this->input->post('email'),
						 'website'=>$this->input->post('website'),
						 'linkface'=>$this->input->post('linkface'),
						 'zingme'=>$this->input->post('zingme'),
						 'twitter'=>$this->input->post('twitter'),
						 );
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('diachi','Địa chỉ','required|trim');
				
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mthongtinlienhe->updateRowByColumn('ttlienhe','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mthongtinlienhe->getRowByColumn('ttlienhe','id',$id);
				$data['title']='Sửa';
				$data['bcCurrent']='Thông tin liên hệ';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
?>