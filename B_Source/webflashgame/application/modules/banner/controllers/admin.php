<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mbanner');
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
				$data['info']=$this->Mbanner->getRowByColumn('fg_banner','id','1');
				$data['title']='Edit banner';
				$data['bcCurrent']='banner';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('image1'=>$this->input->post('image1'),
						'link1'=>$this->input->post('link1'),
						'link2'=>$this->input->post('link2'),
						'link3'=>$this->input->post('link3'),
						'link4'=>$this->input->post('link4'),
						'link5'=>$this->input->post('link5'),
						'link6'=>$this->input->post('link6'),
						
						 'image2'=>$this->input->post('image2'),
						 'image3'=>$this->input->post('image3'),
						 'image4'=>$this->input->post('image4'),
						 'image5'=>$this->input->post('image5'),
						 'image6'=>$this->input->post('image6'),
						 );
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('image1','image 1','required|trim');
				
			$this->form_validation->set_message('required','category  %s not empty');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mbanner->updateRowByColumn('fg_banner','id',$id,$input))
				{
					$this->session->set_userdata('result','update success');
				}
				else $this->session->set_userdata('result','update success');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mbanner->getRowByColumn('fg_banner','id',$id);
				$data['title']='Edit image';
				$data['bcCurrent']='banner';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
