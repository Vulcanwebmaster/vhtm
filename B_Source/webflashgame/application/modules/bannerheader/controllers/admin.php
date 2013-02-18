<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mbannerheader');
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
				$data['info']=$this->Mbannerheader->getRowByColumn('fg_bannerheader','id','1');
				$data['title']='Modifier en-tête bannière';
				$data['bcCurrent']='en-tête bannière';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('image1'=>$this->input->post('image1'),
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
				
			$this->form_validation->set_message('required','Catégorie %s pas vide');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mbannerheader->updateRowByColumn('fg_bannerheader','id',$id,$input))
				{
					$this->session->set_userdata('result','Mettre à jour les succès');
				}
				else $this->session->set_userdata('result','Mettre à jour les faux');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mbannerheader->getRowByColumn('fg_bannerheader','id',$id);
				$data['title']='Modifier photo';
				$data['bcCurrent']='bannière';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
