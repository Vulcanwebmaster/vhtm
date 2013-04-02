<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhelps');
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
				$data['info']=$this->Mhelps->getRowByColumn('fg_helps','id','1');
				//var_dump($data['info']); die();
				$data['title']='Modifier Aider';
				$data['bcCurrent']='Aider';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'title'=>$this->input->post('title'),
						'description'=>$this->input->post('description'),
						'titlefr'=>$this->input->post('titlefr'),
						'descriptionfr'=>$this->input->post('descriptionfr'),
						);
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('title','title','required|trim');
				
			$this->form_validation->set_message('required','Catégorie %s pas vide');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mhelps->updateRowByColumn('fg_helps','id',$id,$input))
				{
					$this->session->set_userdata('result','Mettre à jour les succès');
				}
				else $this->session->set_userdata('result','Mettre à jour les faux');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mhelps->getRowByColumn('fg_helps','id',$id);
				$data['title']='Retouche Aider';
				$data['bcCurrent']='Aider';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
