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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'tintuc/admin/page/';
			$config['per_page']=2;
			$config['total_rows']=count($this->Mtintuc->getListFull('ta_news'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Tin tức';
			$data['bcCurrent']='tin tức';
			$data['list']=$this->Mtintuc->getListOffset('ta_news',2,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'news_title'=>$this->input->post('news_title'),
						'news_content'=>$this->input->post('news_content'),
						'news_post_date'=>$this->input->post('news_post_date'),
						'news_author'=>$this->input->post('news_author'),
						'news_image'=>$this->input->post('news_image'));
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('news_title'))
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
				$this->form_validation->set_rules('news_title','Tiêu đề ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtintuc->insertNewRow('ta_news',$input))
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
			if (!$this->input->post('news_title'))
			{
				$data['info']=$this->Mtintuc->getRowByColumn('ta_news','news_id',$id);
				$data['title']='Sửa tin tức';
				$data['bcCurrent']='Tin tức';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('news_title','Tiêu đề ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtintuc->updateRowByColumn('ta_news','news_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mtintuc->getRowByColumn('ta_news','news_id',$id);
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
			if ($this->Mtintuc->deleteRowByColumn('ta_news','news_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>