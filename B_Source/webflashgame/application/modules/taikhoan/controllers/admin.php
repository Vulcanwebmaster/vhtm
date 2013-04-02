<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mtaikhoan');
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
			$config['base_url']=base_url().'taikhoan/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mtaikhoan->getListFull('fg_accounts'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin tài khoản';
			$data['bcCurrent']='tài khoản';
			$data['list']=$this->Mtaikhoan->getListOffset('fg_accounts',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'news_title'=>$this->input->post('news_title'),
						'news_category'=>$this->input->post('news_category'),
						'news_content'=>$this->input->post('news_content'),
						'news_post_date'=>$this->input->post('news_post_date'),
						'news_author'=>$this->input->post('news_author'),
						'news_image'=>$this->input->post('news_image'),
						'alias'=>$this->getAliasByName($this->input->post('news_title')),
						);
			return $input;
		}
		function insert()
		{
			if (!$this->input->post('news_title'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm tài khoản';
				$data['bcCurrent']='Tài khoản';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('news_title','Tiêu đề (Việt)','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtaikhoan->insertNewRow('fg_accounts',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm tài khoản';
					$data['bcCurrent']='tài khoản';
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
			if (!$this->input->post('news_title'))
			{
				$data['info']=$this->Mtaikhoan->getRowByColumn('fg_accounts','id',$id);
				$data['title']='Sửa tài khoản';
				$data['bcCurrent']='Tài khoản';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('news_title','Tiêu đề (Việt)','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtaikhoan->updateRowByColumn('fg_accounts','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mtaikhoan->getRowByColumn('fg_accounts','id',$id);
					$data['title']='Sửa tài khoản';
					$data['bcCurrent']='Tài khoản';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		function delete($id=0)
		{
			if ($this->Mtaikhoan->deleteRowByColumn('fg_accounts','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}