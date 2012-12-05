<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mquangcao');
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
			$config['base_url']=base_url().'quangcao/admin/page/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mquangcao->getListFull('ln_ads'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Quảng cáo';
			$data['bcCurrent']='quảng cáo';
			$data['list']=$this->Mquangcao->getListOffset('ln_ads',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'ads_banner'=>$this->input->post('ads_banner'),
						'ads_name'=>$this->input->post('ads_name'),
						'ads_link'=>$this->input->post('ads_link'),
						'ads_start_date'=>$this->input->post('ads_start_date'),
						'ads_end_date'=>$this->input->post('ads_end_date'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('ads_name'))
			{
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm quảng cáo';
				$data['bcCurrent']='quảng cáo';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ads_name','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mquangcao->insertNewRow('ln_ads',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm quảng cáo';
					$data['bcCurrent']='quảng cáo';
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
			if (!$this->input->post('ads_name'))
			{
				$data['info']=$this->Mquangcao->getRowByColumn('ln_ads','ads_id',$id);
				$data['title']='Sửa quảng cáo';
				$data['bcCurrent']='Quảng cáo';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ads_name','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mquangcao->updateRowByColumn('ln_ads','ads_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mquangcao->getRowByColumn('ln_ads','ads_id',$id);
					$data['title']='Sửa quảng cáo';
					$data['bcCurrent']='Quảng cáo';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mquangcao->deleteRowByColumn('ln_ads','ads_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
