<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mvedio');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index($index=0)
		{
			$config['base_url']=base_url().'vedio/admin/index/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mvedio->getListFull('ta_vedio'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin video';
			$data['bcCurrent']='Vedio';
			$data['list']=$this->Mvedio->getListOffset('ta_vedio',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'vedio_title'=>$this->input->post('vedio_title'),
						'link_vedio'=>$this->input->post('link_vedio'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('vedio_title'))
			{
				$data['list']=$this->Mvedio->getListFull('ta_vedio');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm video';
				$data['bcCurrent']='Vedio';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('vedio_title','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio->insertNewRow('ta_vedio',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio->getListFull('ta_vedio');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm video';
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
			if (!$this->input->post('vedio_title'))
			{
				$data['list']=$this->Mvedio->getListFull('ta_vedio');
				$data['info']=$this->Mvedio->getRowByColumn('ta_vedio','vedio_id',$id);
				$data['title']='Sửa video';
				$data['bcCurrent']='vedio';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('vedio_title','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvedio->updateRowByColumn('ta_vedio','vedio_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvedio->getListFull('ta_vedio');
					$data['info']=$this->Mvedio->getRowByColumn('ta_vedio','vedio_id',$id);
					$data['title']='Sửa video';
					$data['bcCurrent']='Vedio';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mvedio->deleteRowByColumn('ta_vedio','vedio_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
