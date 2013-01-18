<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Manh');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index($index=0)
		{
			$config['base_url']=base_url().'anh/admin/index/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Manh->getListFull('ta_image'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin ảnh';
			$data['bcCurrent']='Hình ảnh';
			$data['list']=$this->Manh->getListOffset('ta_image',15,$index);
			$data['module']		=	$this->module;
			$data['page']		=	'admin_vlist';
			
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('image_name'		=>	$this->input->post('image_name'),
						'image_namee'		=>	$this->input->post('image_namee'),
						'image_album'		=>	$this->input->post('image_album'),
						'image_file'		=>	$this->input->post('image_file'));
		
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('image_name'))
			{
				$data['config']		=	$this->setupCKEditor('97%','200px');
				$data['title']		=	'Thêm hình ảnh';
				$data['bcCurrent']	=	'Hình ảnh';
				$data['listAlbums']	=	$this->Manh->getListFull('ta_albums');
				$data['module']		=	$this->module;
				$data['page']		=	'admin_vinsert';
				
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('image_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Manh->insertNewRow('ta_image',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']		=	$this->Manh->getListFull('ta_image');
					$data['config'] 	=	$this->setupCKEditor('97%','200px');
					$data['title']		=	'Thêm hình ảnh';
					$data['bcCurrent']	=	'Hỉnh ảnh';
					$data['module']		=	$this->module;
					$data['page']		=	'admin_vinsert';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			if (!$this->input->post('image_name'))
			{
				$data['list']		=	$this->Manh->getListFull('ta_image');
				$data['info']		=	$this->Manh->getRowByColumn('ta_image','image_id',$id);
				$data['title']		=	'Sửa hình ảnh';
				$data['bcCurrent']	=	'Hình ảnh';
				$data['listAlbums']	=	$this->Manh->getListFull('ta_albums');
				$data['module']		=	$this->module;
				$data['page']		=	'admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('image_name','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Manh->updateRowByColumn('ta_image','image_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Manh->getListFull('ta_image');
					$data['info']=$this->Manh->getRowByColumn('ta_image','image_id',$id);
					$data['title']='Sửa hình ảnh';
					$data['bcCurrent']='Hình ảnh';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Manh->deleteRowByColumn('ta_image','image_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
