
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
			
			$this->load->model('Mdanhmuc');
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
			$config['base_url']=base_url().'danhmuc/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mdanhmuc->getListFull('fg_category'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Danh mục';
			$data['bcCurrent']='danh mục';
			$data['list']=$this->Mdanhmuc->getListOffset('fg_category',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'category_name'=>$this->input->post('category_name'),
						'category_namefr'=>$this->input->post('category_namefr'),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('category_name'))
			{
				$data['list']=$this->Mdanhmuc->getListFull('fg_category');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm danh mục';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('category_name','Tên ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->insertNewRow('fg_category',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdanhmuc->getListFull('fg_category');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm danh mục';
					$data['bcCurrent']='danh mục';
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
			if (!$this->input->post('category_name'))
			{
				$data['info']=$this->Mdanhmuc->getRowByColumn('fg_category','id',$id);
				$data['title']='Sửa danh mục';
				$data['bcCurrent']='danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('category_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->updateRowByColumn('fg_category','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mdanhmuc->getRowByColumn('fg_category','id',$id);
					$data['title']='Sửa danh mục';
					$data['bcCurrent']='danh mục';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mdanhmuc->deleteRowByColumn('fg_category','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
