<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgiaidau');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='giải đấu';
			$data['bcCurrent']='giải đấu';
			$data['list']=$this->Mgiaidau->getListCategory('fg_tournaments');
			//var_dump($data['list']); die();
			$data['module']=$this->module;
			$data['page']='admin_list_courses';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('name_tour'=>$this->input->post('name_tour'),
						'name_tour'=>$this->input->post('name_tourfr'),
						'game_id'=>$this->input->post('game_id'),
						'image'=>$this->input->post('image'),
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
				$data['list']=$this->Mgiaidau->getListFull('fg_games');
				$data['info']=$this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$id);
				//var_dump($data['info']); die();
				$data['title']='Sửa giải đấu';
				$data['bcCurrent']='giải đấu';
				$data['module']=$this->module;
				$data['page']='admin_edit_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name_tour','Tên','required|trim');
				$this->form_validation->set_rules('game_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgiaidau->updateRowByColumn('fg_tournaments','tour_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgiaidau->getListFull('fg_games');
					$data['info']=$this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$id);
					$data['title']='Sửa khóa học';
					$data['bcCurrent']='khóa học';
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
				$data['list']=$this->Mgiaidau->getListFull('fg_games');
				$data['title']='Thêm giải đấu';
				$data['bcCurrent']='giải đấu';
				$data['module']=$this->module;
				$data['page']='admin_insert_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name_tour','Tên','required|trim');
				$this->form_validation->set_rules('game_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgiaidau->insertNewRow('fg_tournaments',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgiaidau->getListFull('fg_games');
					$data['title']='Thêm giải đấu mới';
					$data['bcCurrent']='giải đấu';
					$data['module']=$this->module;
					$data['page']='admin_insert_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		function delete($id=0)
		{
			if ($this->Mgiaidau->deleteRowByColumn('fg_tournaments','game_id',$id))
			{
				
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
