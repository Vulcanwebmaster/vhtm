<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhotro');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mhotro->getRowByColumn('fg_hotro','id','1');
				$data['title']='Edit support';
				$data['bcCurrent']='support';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('country'=>$this->input->post('country'),
						'title'=>$this->input->post('title'),
						'email'=>$this->input->post('email'),
						'sdt'=>$this->input->post('sdt'),
						 );
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('country','country','required|trim');
				
			$this->form_validation->set_message('required','category  %s not empty');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mhotro->updateRowByColumn('fg_hotro','id',$id,$input))
				{
					$this->session->set_userdata('result','update success');
				}
				else $this->session->set_userdata('result','update success');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mhotro->getRowByColumn('fg_hotro','id',$id);
				$data['title']='Edit support';
				$data['bcCurrent']='support';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
