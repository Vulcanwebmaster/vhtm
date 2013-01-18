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
			$data['list']=$this->Mgames->getListCategory('fg_games');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('name'=>$this->input->post('name1'),
						'rules'=>$this->input->post('rules'),
						'statistics'=>$this->input->post('statistics'),
						'category_id'=>$this->input->post('category_id'),
						'overview'=>$this->input->post('overview'),
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
				$data['title']='Thêm games';
				$data['bcCurrent']='games';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name1','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgames->insertNewRow('fg_games',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgames->getListFull('fg_category');
					$data['title']='Thêm games';
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
				$data['info']=$this->Mgames->getRowByColumn('fg_games','id',$id);
				$data['title']='Sửa games';
				$data['bcCurrent']='games';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name1','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgames->updateRowByColumn('fg_games','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgames->getListFull('fg_category');
					$data['info']=$this->Mgames->getRowByColumn('fg_games','id',$id);
					$data['title']='Sửa games';
					$data['bcCurrent']='games';
					$data['module']=$this->module;
					$data['page']='admin_edit_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mgames->deleteRowByColumn('fg_games','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
