<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mtintuc');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau2/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'tintuc/admin/page/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mtintuc->getListFull('tintuc'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Tin tức';
			$data['bcCurrent']='tin tức';
			$data['list']=$this->Mtintuc->getListOffset('tintuc',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'anh'=>$this->input->post('anh'),
						'tieude_v'=>$this->input->post('tieude_v'),
						'tieude_e'=>$this->input->post('tieude_e'),
						'noidung_v'=>$this->input->post('noidung_v'),
						'noidung_e'=>$this->input->post('noidung_e'),
						'ngaythang'=>$this->input->post('ngaythang'),
						'tacgia'=>$this->input->post('tacgia'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tieude_v'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm tin tức';
				$data['bcCurrent']='Tin tức';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtintuc->insertNewRow('tintuc',$input))
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
			if (!$this->input->post('tieude_v'))
			{
				$data['info']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
				$data['title']='Sửa tin tức';
				$data['bcCurrent']='Tin tức';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtintuc->updateRowByColumn('tintuc','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
					$data['title']='Sửa tin tức';
					$data['bcCurrent']='Tin tức';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mtintuc->deleteRowByColumn('tintuc','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>