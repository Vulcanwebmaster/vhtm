<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mvedio_home');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index($index=0)
		{
			$config['base_url']=base_url().'vedio_home/admin/index/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mvedio_home->getListFull('ta_vedio_home'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin vedio';
			$data['bcCurrent']='Vedio';
			$data['list']=$this->Mvedio_home->getListOffset('ta_vedio_home',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						
						'link_vedio'=>$this->input->post('link_vedio'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('link_vedio'))
			{
				$data['list']=$this->Mvedio_home->getListFull('ta_vedio_home');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm vedio';
				$data['bcCurrent']='Vedio';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('link_vedio','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio_home->insertNewRow('ta_vedio_home',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio_home->getListFull('ta_vedio_home');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm vedio';
					$data['bcCurrent']='Vedio';
					$data['module']=$this->module;
					$data['page']='admin_vinsert';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			if (!$this->input->post('link_vedio'))
			{
				$data['list']=$this->Mvedio_home->getListFull('ta_vedio_home');
				$data['info']=$this->Mvedio_home->getRowByColumn('ta_vedio_home','vedio_id',$id);
				$data['title']='Sửa vedio';
				$data['bcCurrent']='vedio';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('link_vedio','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio_home->updateRowByColumn('ta_vedio_home','vedio_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio_home->getListFull('ta_vedio_home');
					$data['info']=$this->Mvedio_home->getRowByColumn('ta_vedio_home','vedio_id',$id);
					$data['title']='Sửa vedio';
					$data['bcCurrent']='Vedio';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mvedio_home->deleteRowByColumn('ta_vedio_home','vedio_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
