<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mhelps');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'helps/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mhelps->getListFull('fg_helps'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin trợ giúp';
			$data['bcCurrent']='helps';
			$data['list']=$this->Mhelps->getListOffset('fg_helps',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'title'=>$this->input->post('title'),
						'type'=>$this->input->post('type'),
						'description'=>$this->input->post('description'),
						);
			return $input;
		}
		function insert()
		{
			if (!$this->input->post('title'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm helps';
				$data['bcCurrent']='Helps';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tiêu đề (Việt)','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mhelps->insertNewRow('fg_helps',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm helps';
					$data['bcCurrent']='helps';
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
			if (!$this->input->post('title'))
			{
				$data['info']=$this->Mhelps->getRowByColumn('fg_helps','id',$id);
				$data['title']='Sửa helps';
				$data['bcCurrent']='Helps';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tiêu đề (Việt)','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mhelps->updateRowByColumn('fg_helps','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mhelps->getRowByColumn('fg_helps','id',$id);
					$data['title']='Sửa helps';
					$data['bcCurrent']='Helps';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		function delete($id=0)
		{
			if ($this->Mhelps->deleteRowByColumn('fg_helps','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
