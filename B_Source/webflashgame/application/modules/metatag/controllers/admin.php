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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mmetatag->getRowByColumn('st_metatag','id','1');
				$data['title']='Modifier les paramètres';
				$data['bcCurrent']='slide';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'meta_home'=>$this->input->post('meta_home'),
						'meta_news'=>$this->input->post('meta_news'),
						'meta_tourmanents'=>$this->input->post('meta_tourmanents'),
						'meta_online'=>$this->input->post('meta_online'),
						'meta_help'=>$this->input->post('meta_help'),
						);
			return $input;
		}
	
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('meta_home','meta_home 1','required|trim');
				
			$this->form_validation->set_message('required','Catégorie %s pas vide');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mmetatag->updateRowByColumn('st_metatag','id',$id,$input))
				{
					$this->session->set_userdata('result','Éditer succès');
				}
				else $this->session->set_userdata('result','Éditer échec');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mmetatag->getRowByColumn('st_metatag','id',$id);
				$data['title']='Modifier les paramètres';
				$data['bcCurrent']='mise';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
	}
