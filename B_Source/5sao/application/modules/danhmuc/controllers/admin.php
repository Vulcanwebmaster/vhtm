<?php
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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Danh mục';
			$data['bcCurrent']='Danh mục';
			$data['list']=$this->Mdanhmuc->getListFull('danhmuc');
			$parents=array();
			foreach ($data['list'] as $item)
			{
				$ctparent=$this->Mdanhmuc->getRowByColumn('danhmuc','id',$item->parent_id);
				if ($ctparent)
					$parents[]=$ctparent->ten_v;
				else $parents[]=false;
			}
			$data['parentsName']=$parents;
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('ten_v'=>$this->input->post('ten_v'),
						'ten_e'=>$this->input->post('ten_e'),
						'parent_id'=>$this->input->post('parent_id'));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('ten_v'))
			{
				$data['listParents']=$this->Mdanhmuc->getListByColumn('danhmuc','parent_id','0');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm danh mục';
				$data['bcCurrent']='Danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->insertNewRow('danhmuc',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
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
			if (!$this->input->post('ten_v'))
			{
				$data['listParents']=$this->Mdanhmuc->getListByColumn('danhmuc','parent_id','0');
				$data['info']=$this->Mdanhmuc->getRowByColumn('danhmuc','id',$id);
				$data['title']='Sửa danh mục';
				$data['bcCurrent']='danh mục';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten_v','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mdanhmuc->updateRowByColumn('danhmuc','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mdanhmuc->getRowByColumn('danhmuc','id',$id);
					$data['title']='Sửa danh mục';
					$data['bcCurrent']='Danh mục';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mdanhmuc->deleteRowByColumn('danhmuc','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>