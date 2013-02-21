<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mstep');
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
				$data['info']=$this->Mstep->getRowByColumn('fg_step','id','1');
				$data['title']='Modifier Étape';
				$data['bcCurrent']='Étape';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'b1'=>$this->input->post('b1'),
						'b1fr'=>$this->input->post('b1fr'),
						'b2'=>$this->input->post('b2'),
						'b2fr'=>$this->input->post('b2fr'),
						'b3'=>$this->input->post('b3'),
						'b3fr'=>$this->input->post('b3fr'),
						'footer'=>$this->input->post('footer'),
						'footerfr'=>$this->input->post('footerfr'),
						'footer2'=>$this->input->post('footer2'),
						'footerfr2'=>$this->input->post('footerfr2'),
						);
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('b1','b1','required|trim');
				
			$this->form_validation->set_message('required','Catégorie %s pas vide');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mstep->updateRowByColumn('fg_step','id',$id,$input))
				{
					$this->session->set_userdata('result','Mettre à jour les succès');
				}
				else $this->session->set_userdata('result','Mettre à jour les faux');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mstep->getRowByColumn('fg_step','id',$id);
				$data['title']='Retouche Étape';
				$data['bcCurrent']='Étape';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
