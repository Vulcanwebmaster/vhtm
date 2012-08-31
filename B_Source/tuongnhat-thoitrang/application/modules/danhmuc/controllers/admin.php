<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->load->model('Mdanhmuc');
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['list']=$this->Mdanhmuc->getListFull('n_t_danhmuc');
			$data['module']=$this->module;
			$data['title']='Danh mục sản phẩm';
			$data['bcCurrent']='Danh mục sản phẩm';
			$data['page']='admin-list-danhmuc';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('ten'=>$this->input->post('ten'));
			return $input;
		}
		
		function insertNewProduct()
		{
			if (!$this->input->post('ten'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/thoitrang/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				$data['category']=$this->Mdanhmuc->getListFull('n_t_danhmuc');
				$data['module']=$this->module;
				$data['title']='Thêm danh mục sản phẩm';
				$data['bcCurrent']='Danh mục sản phẩm';
				$data['page']='admin_danhmuc_insert';
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mdanhmuc->insertNewRow('n_t_danhmuc',$input))
					{
						$this->session->set_userdata('backend_product_result','Thêm thành công');
					}
					else $this->session->set_userdata('backend_product_result','Thêm thất bại');
					
					$this->index();
				}
				else
				{
					//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/thoitrang/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				$data['category']=$this->Mdanhmuc->getListFull('n_t_danhmuc');
				$data['module']=$this->module;
				$data['title']='Thêm Danh mục sản phẩm';
				$data['bcCurrent']='Danh mục sản phẩm';
				$data['page']='admin_danhmuc_insert';
				$this->load->view('admin/container',$data);
				}
			}
		}
		
		function editProductById($id=0)
		{
			if (!$this->input->post('ten'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/thoitrang/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				$data['category']=$this->Mdanhmuc->getListFull('n_t_danhmuc');
				$data['info']=$this->Mdanhmuc->getRowByColumn('n_t_danhmuc','id',$id);
				$data['module']=$this->module;
				$data['title']='Sửa Danh mục sản phẩm';
				$data['bcCurrent']='Danh mục sản phẩm';
				$data['page']='admin-danhmuc-edit';
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mdanhmuc->updateRowByColumn('n_t_danhmuc','id',$id,$input))
					{
						$this->session->set_userdata('backend_product_result','Cập nhật thành công');
					}
					else $this->session->set_userdata('backend_product_result','Cập nhật thất bại');
					
					$this->index();
				}
				else
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/thoitrang/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					$data['category']=$this->Mdanhmuc->getListFull('n_t_danhmuc');
					$data['info']=$this->Mdanhmuc->getRowByColumn('n_t_danhmuc','id',$id);
					$data['module']=$this->module;
					$data['title']='Sửa danh mục sản phẩm';
					$data['bcCurrent']='Danh mục sản phẩm';
					$data['page']='admin-danhmuc-edit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function deleteProductById($id=0)
		{
			if ($this->Mdanhmuc->deleteRowByColumn('n_t_danhmuc','id',$id))			
				$this->session->set_userdata('backend_product_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('backend_product_result','Dữ liệu chưa được xóa');
			$this->index();
		}
	}
?>