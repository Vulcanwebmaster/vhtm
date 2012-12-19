<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdulich');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'dulich/admin/page/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mdulich->getListFull('ln_dulich'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Du lịch';
			$data['bcCurrent']='Du lịch';
			$data['list']=$this->Mdulich->getListOffset('ln_dulich',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'anh'=>$this->input->post('anh'),
						'tieude'=>$this->input->post('tieude'),
						'noidung'=>$this->input->post('noidung'),
						'nguon'=>$this->input->post('nguon'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tieude'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm du lịch';
				$data['bcCurrent']='Du lịch';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tiêu đề ','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdulich->insertNewRow('ln_dulich',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm tin tức';
					$data['bcCurrent']='tin tức';
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
			if (!$this->input->post('tieude'))
			{
				$data['info']=$this->Mdulich->getRowByColumn('ln_dulich','id',$id);
				$data['title']='Sửa du lịch';
				$data['bcCurrent']='Du lịch';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tiêu đề ','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdulich->updateRowByColumn('ln_dulich','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mdulich->getRowByColumn('ln_dulich','id',$id);
					$data['title']='Sửa du lịch';
					$data['bcCurrent']='Du lịch';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mdulich->deleteRowByColumn('ln_dulich','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
