
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
			
			$this->load->model('Minfo');
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
			$config['base_url']=base_url().'info/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Minfo->getListFull('n_'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Danh mục';
			$data['bcCurrent']='danh mục';
			$data['list']=$this->Minfo->getListOffset('ta_courses_cate',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'cate_name'=>$this->input->post('cate_name'),
						'cate_namee'=>$this->input->post('cate_namee'),
						'alias'=>$this->getAliasByName($this->input->post('cate_name')),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('cate_name'))
			{
				$data['list']=$this->Minfo->getListFull('ta_courses_cate');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm danh mục';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('cate_name','Tên ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Minfo->insertNewRow('ta_courses_cate',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Minfo->getListFull('ta_courses_cate');
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
			if (!$this->input->post('cate_name'))
			{
				$data['info']=$this->Minfo->getRowByColumn('ta_courses_cate','id',$id);
				$data['title']='Sửa danh mục';
				$data['bcCurrent']='danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('cate_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Minfo->updateRowByColumn('ta_courses_cate','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Minfo->getRowByColumn('ta_courses_cate','id',$id);
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
			if ($this->Minfo->deleteRowByColumn('ta_courses_cate','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
