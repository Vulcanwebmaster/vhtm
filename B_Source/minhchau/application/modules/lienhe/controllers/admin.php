<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mlienhe');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			$data['info']=$this->Mlienhe->getRowByColumn('mc_contact_us','id',1);
			$data['title']='Sửa liên hệ';
			$data['bcCurrent']='Liên hệ';
			$data['module']=$this->module;
			$data['page']='admin_edit_contactus';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('contentv'=>$this->input->post('contentv'),
						'contente'=>$this->input->post('contente'));
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('contentv','Nội dung (Việt)','required|trim');
			
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mlienhe->updateRowByColumn('mc_contact_us','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$this->index();
			}
		}
	}
?>