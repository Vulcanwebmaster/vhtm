<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mtagv');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='FlashGame';
			$data['bcCurrent']='Flash Game';
			$data['list']=$this->Mtagv->getListCategory('fg_tag');
			$data['module']=$this->module;
			$data['page']='admin_list_courses';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('name'=>$this->input->post('name'),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('courses_name'))
			{
				$data['list']=$this->Mtagv->getListFull('fg_tag');
				$data['title']='Ajouter Balise';
				$data['bcCurrent']='Balise';
				$data['module']=$this->module;
				$data['page']='admin_insert_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name','Tên','required|trim');
				
				$this->form_validation->set_message('required','Catégorie %s pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtagv->insertNewRow('fg_tag',$input))
					{
						$this->session->set_userdata('result','Ajouter un nouveau succès');
					}
					else $this->session->set_userdata('result','Ajouter nouvel échec');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mtagv->getListFull('fg_tag');
					$data['title']='Ajouter Balise';
					$data['bcCurrent']='Balise';
					$data['module']=$this->module;
					$data['page']='admin_insert_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('courses_name'))
			{
				$data['list']=$this->Mtagv->getListFull('ta_courses_cate');
				$data['info']=$this->Mtagv->getRowByColumn('ta_courses','courses_id',$id);
				$data['title']='Modifier Balise';
				$data['bcCurrent']='Balise';
				$data['module']=$this->module;
				$data['page']='admin_edit_courses';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('courses_name','Tên','required|trim');
				$this->form_validation->set_rules('courses_category','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtagv->updateRowByColumn('ta_courses','courses_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mtagv->getListFull('ta_courses_cate');
					$data['info']=$this->Mtagv->getRowByColumn('ta_courses','courses_id',$id);
					$data['title']='Modifier Balise';
					$data['bcCurrent']='Balise';
					$data['module']=$this->module;
					$data['page']='admin_edit_courses';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mtagv->deleteRowByColumn('fg_tag','id',$id))
			{
				$this->session->set_userdata('result','Effacer succès');
			}
			else $this->session->set_userdata('result','Effacer échec');		
			$this->index();
		}
	}
