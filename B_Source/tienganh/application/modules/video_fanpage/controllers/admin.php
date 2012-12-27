<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mvideo_fanpage');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index($index=0)
		{
			$config['base_url']=base_url().'video_fanpage/admin/index/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mvideo_fanpage->getListFull('ta_vedio_fanpage'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin vedio';
			$data['bcCurrent']='Vedio';
			$data['list']=$this->Mvideo_fanpage->getListOffset('ta_vedio_fanpage',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'video_child'=>$this->input->post('video_child'),
						);
		
			return $input;
		}
		
		
		
		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			if (!$this->input->post('video_child'))
			{
				$data['list']=$this->Mvideo_fanpage->getListFull('ta_vedio_fanpage');
				$data['info']=$this->Mvideo_fanpage->getRowByColumn('ta_vedio_fanpage','vedio_id',$id);
				$data['title']='Sửa vedio';
				$data['bcCurrent']='vedio';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('video_child','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mvideo_fanpage->updateRowByColumn('ta_vedio_fanpage','vedio_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mvideo_fanpage->getListFull('ta_vedio_fanpage');
					$data['info']=$this->Mvideo_fanpage->getRowByColumn('ta_vedio_fanpage','vedio_id',$id);
					$data['title']='Sửa vedio';
					$data['bcCurrent']='Vedio';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
	}
