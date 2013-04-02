
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
			
			$this->load->model('Mquangcao');
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
			$config['base_url']=base_url().'quangcao/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mquangcao->getListFull('fg_category'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Quảng cáo';
			$data['bcCurrent']='quảng cáo';
			$data['list']=$this->Mquangcao->getListOffset('fg_ads',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'name'=>$this->input->post('name'),
						'linkqc'=>$this->input->post('linkqc'),
						'content'=>$this->input->post('content'),
						
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('name'))
			{
				$data['list']=$this->Mquangcao->getListFull('fg_ads');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm quảng cáo';
				$data['bcCurrent']='Quảng cáo';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name','Tên ','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mquangcao->insertNewRow('fg_ads',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mquangcao->getListFull('fg_ads');
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
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('name'))
			{
				$data['info']=$this->Mquangcao->getRowByColumn('fg_ads','id',$id);
				$data['title']='Sửa quảng cáo';
				$data['bcCurrent']='quảng cáo';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mquangcao->updateRowByColumn('fg_ads','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mquangcao->getRowByColumn('fg_ads','id',$id);
					$data['title']='Sửa quảng cáo';
					$data['bcCurrent']='quảng cáo';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mquangcao->deleteRowByColumn('fg_ads','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
