<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msetting');
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
				$data['info']=$this->Msetting->getRowByColumn('fg_setting','id','1');
				$data['title']='Modifier les paramètres';
				$data['bcCurrent']='slide';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'newsfr'=>$this->input->post('newsfr'),
						'playfr'=>$this->input->post('playfr'),
						'news'=>$this->input->post('news'),
						'play'=>$this->input->post('play'),
						'phantramweb'=>$this->input->post('phantramweb'),
						'user_gold'=>$this->input->post('user_gold'),
						'linkface'=>$this->input->post('linkface'),
						'linktwitter'=>$this->input->post('linktwitter'),
						'linkgoogle'=>$this->input->post('linkgoogle'),
						'linkyoutube'=>$this->input->post('linkyoutube'),
						'personalfr'=>$this->input->post('personalfr'),
						'personal'=>$this->input->post('personal'),
						'settingfr'=>$this->input->post('settingfr'),
						'setting'=>$this->input->post('setting'),
						);
			return $input;
		}
	
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('phantramweb','phantramweb 1','required|trim');
				
			$this->form_validation->set_message('required','Catégorie %s pas vide');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Msetting->updateRowByColumn('fg_setting','id',$id,$input))
				{
					$this->session->set_userdata('result','Éditer succès');
				}
				else $this->session->set_userdata('result','Éditer échec');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Msetting->getRowByColumn('fg_setting','id',$id);
				$data['title']='Modifier les paramètres';
				$data['bcCurrent']='mise';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
	}
