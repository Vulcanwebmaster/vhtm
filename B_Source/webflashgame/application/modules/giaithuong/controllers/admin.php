<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Musertournament');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']=' User Tournaments';
			$data['bcCurrent']='User Tournaments';
			$data['list']=$this->Musertournament->getListCategory('fg_giaithuong');
			//var_dump($data['list']); die();
			$data['module']=$this->module;
			$data['page']='admin_list_courses';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('name_tour'=>$this->input->post('name_tour'),
						'name_tourfr'=>$this->input->post('name_tourfr'),
						'game_id'=>$this->input->post('game_id'),
						'rules'=>$this->input->post('rules'),
						'rules'=>$this->input->post('rulesfr'),
						'overview'=>$this->input->post('overview'),
						'overview'=>$this->input->post('overviewfr'),
						'end_date'=>$this->input->post('end_date'),
						'start_date'=>$this->input->post('start_date'),
						);
			return $input;
		}
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('name_tour'))
			{
				$data['list']=$this->Musertournament->getListFull('fg_games');
				$data['info']=$this->Musertournament->getRowByColumn('fg_tournaments','tour_id',$id);
				//var_dump($data['info']); die();
				$data['title']='Edit the tournament';
				$data['bcCurrent']='Tournaments';
				$data['module']=$this->module;
				$data['page']='admin_edit_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name_tour','Name','required|trim');
				$this->form_validation->set_rules('game_id','Category','required|trim');
				
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Musertournament->updateRowByColumn('fg_tournaments','tour_id',$id,$input))
					{
						$this->session->set_userdata('result','Update success!');
					}
					else $this->session->set_userdata('result','Update false!');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Musertournament->getListFull('fg_games');
					$data['info']=$this->Musertournament->getRowByColumn('fg_tournaments','tour_id',$id);
					$data['title']='Updated Tournaments';
					$data['bcCurrent']='Tournaments';
					$data['module']=$this->module;
					$data['page']='admin_edit_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('name_tour'))
			{
				$data['list']=$this->Musertournament->getListFull('fg_games');
				$data['title']='Add Tournaments';
				$data['bcCurrent']='Tournaments';
				$data['module']=$this->module;
				$data['page']='admin_insert_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name_tour','Name','required|trim');
				$this->form_validation->set_rules('game_id','Category','required|trim');
				
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Musertournament->insertNewRow('fg_tournaments',$input))
					{
						$this->session->set_userdata('result','Add new success');
					}
					else $this->session->set_userdata('result','Add new not success');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Musertournament->getListFull('fg_games');
					$data['title']='Add Tournaments';
					$data['bcCurrent']='Tournaments';
					$data['module']=$this->module;
					$data['page']='admin_insert_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		function delete($id=0)
		{
			if ($this->Musertournament->deleteRowByColumn('fg_tournaments','tour_id',$id))
			{
				
				$this->session->set_userdata('result','Delete success !');
			}
			else $this->session->set_userdata('result','Delete success !');		
			$this->index();
		}
	}
