<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgames');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Games';
			$data['bcCurrent']='games';
			$data['list']=$this->Mgames->getListCategory1('fg_games');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('name'=>$this->input->post('name1'),
						'namefr'=>$this->input->post('namefr'),
						'rules'=>$this->input->post('rules'),
						'rulesfr'=>$this->input->post('rulesfr'),
						'statistics'=>$this->input->post('statistics'),
						'statisticsfr'=>$this->input->post('statisticsfr'),
						'category_id'=>$this->input->post('category_id'),
						'overview'=>$this->input->post('overview'),
						'overviewfr'=>$this->input->post('overviewfr'),
						'linkgame'=>$this->input->post('linkgame'),
						'image'=>$this->input->post('image'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('name1'))
			{
				$data['list']=$this->Mgames->getListFull('fg_category');
				$data['title']='Add games';
				$data['bcCurrent']='games';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name1','Name','required|trim');
				$this->form_validation->set_rules('category_id','Category','required|trim');
				
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgames->insertNewRow('fg_games',$input))
					{
						$this->session->set_userdata('result','Add new success');
					}
					else $this->session->set_userdata('result','Add new not success');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgames->getListFull('fg_category');
					$data['title']='Add games';
					$data['bcCurrent']='games';
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
			if (!$this->input->post('name1'))
			{
				$data['list']=$this->Mgames->getListFull('fg_category');
				$data['info']=$this->Mgames->getRowByColumn('fg_games','game_id',$id);
				$data['title']='Edit games';
				$data['bcCurrent']='games';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name1','Name','required|trim');
				$this->form_validation->set_rules('category_id','Category','required|trim');
				
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgames->updateRowByColumn('fg_games','game_id',$id,$input))
					{
						$this->session->set_userdata('result','update success');
					}
					else $this->session->set_userdata('result','update not success');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgames->getListFull('fg_category');
					$data['info']=$this->Mgames->getRowByColumn('fg_games','game_id',$id);
					$data['title']='Edit games';
					$data['bcCurrent']='games';
					$data['module']=$this->module;
					$data['page']='admin_edit_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mgames->deleteRowByColumn('fg_games','game_id',$id))
			{
				$this->session->set_userdata('result','Delete success');
			}
			else $this->session->set_userdata('result','Delete not success');		
			$this->index();
		}
	}
