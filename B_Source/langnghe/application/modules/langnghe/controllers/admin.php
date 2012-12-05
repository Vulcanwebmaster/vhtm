<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mlangnghe');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'langnghe/admin/page/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mlangnghe->getListFull('ln_village'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông làng nghề';
			$data['bcCurrent']='làng nghề';
			$data['list']=$this->Mlangnghe->getListOffset('ln_village',15,$index);
			$listCategories=array();
			$data['listCategories']=$listCategories;
			$data['module']=$this->module;
			$data['page']='admin_list_village';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'village_name'=>$this->input->post('village_name'),
						'village_description'=>$this->input->post('village_description'),
						'alias'=>$this->getAliasByName($this->input->post('village_name')),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('village_name'))
			{
				$data['list']=$this->Mlangnghe->getListFull('ln_category');
				$data['title']='Thêm thông tin làng nghề';
				$data['bcCurrent']='làng nghề';
				$data['module']=$this->module;
				$data['page']='admin_insert_village';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('village_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mlangnghe->insertNewRow('ln_village',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mlangnghe->getListFull('ln_category');
					$data['title']='Thêm thông tin làng nghề';
					$data['bcCurrent']='làng nghề';
					$data['module']=$this->module;
					$data['page']='admin_insert_village';
					$this->load->view('admin/container',$data);
				}
			}
		}

		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('village_name'))
			{
				$data['list']=$this->Mlangnghe->getListFull('ln_category');
				$data['info']=$this->Mlangnghe->getRowByColumn('ln_village','village_id',$id);
				$data['title']='Sửa thông làng nghề';
				$data['bcCurrent']='làng nghề';
				$data['module']=$this->module;
				$data['page']='admin_edit_village';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('village_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mlangnghe->updateRowByColumn('ln_village','village_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mlangnghe->getListFull('ln_category');
					$data['info']=$this->Mlangnghe->getRowByColumn('ln_village','village_id',$id);
					$data['title']='Sửa thông làng nghề';
					$data['bcCurrent']='làng nghề';
					$data['module']=$this->module;
					$data['page']='admin_edit_village';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mlangnghe->deleteRowByColumn('ln_village','village_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		
		
	}