
<?php
/**
 * 
 * This class is controller of Thu vien in front. 
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
			
			$this->load->model('Mgioithieu');
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
			$config['base_url']=base_url().'gioithieu/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mgioithieu->getListFull('fg_about_us'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Giới thiệu';
			$data['bcCurrent']='giới thiệu';
			$data['list']=$this->Mgioithieu->getListOffset('fg_about_us',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'title'=>$this->input->post('title'),
						'content'=>$this->input->post('content'),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('title'))
			{
				$data['list']=$this->Mgioithieu->getListFull('fg_about_us');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm giới thiệu';
				$data['bcCurrent']='Giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tên ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgioithieu->insertNewRow('fg_about_us',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgioithieu->getListFull('fg_about_us');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm giới thiệu';
					$data['bcCurrent']='giới thiệu';
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
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('title'))
			{
				$data['info']=$this->Mgioithieu->getRowByColumn('fg_about_us','id',$id);
				$data['title']='Sửa giới thiệu';
				$data['bcCurrent']='giới thiệu';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgioithieu->updateRowByColumn('fg_about_us','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mgioithieu->getRowByColumn('fg_about_us','id',$id);
					$data['title']='Sửa giới thiệu';
					$data['bcCurrent']='giới thiệu';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mgioithieu->deleteRowByColumn('fg_about_us','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
