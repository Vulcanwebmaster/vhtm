<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mbelote');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Belote';
			$data['bcCurrent']='Belote';
			$data['list']=$this->Mbelote->getListFull('fg_belote');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('description'=>$this->input->post('description'),
						'content'=>$this->input->post('content'),
						'image'=>$this->input->post('image'),
						'descriptionfr'=>$this->input->post('descriptionfr'),
						'contentfr'=>$this->input->post('contentfr'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('description'))
			{
				$data['list']=$this->Mbelote->getListFull('fg_belote');
				$data['title']='Add belote';
				$data['bcCurrent']='belote';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('description','Name','required|trim');
				
				$this->form_validation->set_message('required','Catégorie %s pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mbelote->insertNewRow('fg_belote',$input))
					{
						$this->session->set_userdata('result','Ajouter un nouveau succès');
					}
					else $this->session->set_userdata('result','Ajouter nouvel échec');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mbelote->getListFull('fg_belote');
					$data['title']='Ajouter belote';
					$data['bcCurrent']='belote';
					$data['module']=$this->module;
					$data['page']='admin_insert_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('description'))
			{
				$data['info']=$this->Mbelote->getRowByColumn('fg_belote','id',$id);
				$data['title']='Modifier belote';
				$data['bcCurrent']='belote';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('description','description','required|trim');
				$this->form_validation->set_message('required','Catégorie %s pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mbelote->updateRowByColumn('fg_belote','id',$id,$input))
					{
						$this->session->set_userdata('result','Mettre à jour les succès');
					}
					else $this->session->set_userdata('result','Mettre à jour les faux');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mbelote->getRowByColumn('fg_belote','id',$id);
					$data['title']='Modifier belote';
					$data['bcCurrent']='belote';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mbelote->deleteRowByColumn('fg_belote','id',$id))
			{
				$this->session->set_userdata('result','Effacer succès');
			}
			else $this->session->set_userdata('result','Effacer échec');		
			$this->index();
		}
	}
