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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mslide->getRowByColumn('fg_slide','id','1');
				$data['title']='Edit slide';
				$data['bcCurrent']='slide';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'image1'=>$this->input->post('image1'),
						'image2'=>$this->input->post('image2'),
						'image3'=>$this->input->post('image3'),
						'image4'=>$this->input->post('image4'),
						'title1'=>$this->input->post('title1'),
						'title2'=>$this->input->post('title2'),
						'title3'=>$this->input->post('title3'),
						'title4'=>$this->input->post('title4'),
						'content1'=>$this->input->post('content1'),
						'content2'=>$this->input->post('content2'),
						'content3'=>$this->input->post('content3'),
						'content4'=>$this->input->post('content4'),
						'link1'=>$this->input->post('link1'),
						'link2'=>$this->input->post('link2'),
						'link3'=>$this->input->post('link3'),
						'link4'=>$this->input->post('link4'),
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
				if ($this->Mslide->updateRowByColumn('fg_slide','id',$id,$input))
				{
					$this->session->set_userdata('result','update success');
				}
				else $this->session->set_userdata('result','update success');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mslide->getRowByColumn('fg_slide','id',$id);
				$data['title']='Edit image';
				$data['bcCurrent']='banner';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
	}
