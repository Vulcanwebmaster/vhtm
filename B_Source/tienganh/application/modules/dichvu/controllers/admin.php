
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
			
			$this->load->model('Mdichvu');
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
			$config['base_url']=base_url().'dichvu/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mdichvu->getListFull('ta_dichvu'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Dịch vụ';
			$data['bcCurrent']='dịch vụ';
			$data['list']=$this->Mdichvu->getListOffset('ta_dichvu',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'ten'=>$this->input->post('ten'),
						'tene'=>$this->input->post('tene'),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('ten'))
			{
				$data['list']=$this->Mdichvu->getListFull('ta_dichvu');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm dịch vụ';
				$data['bcCurrent']='Dịch vụ';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten','Tên ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdichvu->insertNewRow('ta_dichvu',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mdichvu->getListFull('ta_dichvu');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm dịch vụ';
					$data['bcCurrent']='dịch vụ';
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
			if (!$this->input->post('ten'))
			{
				$data['info']=$this->Mdichvu->getRowByColumn('ta_dichvu','id',$id);
				$data['title']='Sửa dịch vụ';
				$data['bcCurrent']='dịch vụ';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdichvu->updateRowByColumn('ta_dichvu','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mdichvu->getRowByColumn('ta_dichvu','id',$id);
					$data['title']='Sửa dịch vụ';
					$data['bcCurrent']='dịch vụ';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mdichvu->deleteRowByColumn('ta_dichvu','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
