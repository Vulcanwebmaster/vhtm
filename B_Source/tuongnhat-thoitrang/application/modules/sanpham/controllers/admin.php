<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->load->model('Msanpham');
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['list']=$this->Msanpham->getListFull('n_t_sanpham');
			$data['module']=$this->module;
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$data['page']='admin-list-product';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('ten'=>$this->input->post('ten'),
						'danhmuc_id'=>$this->input->post('danhmuc_id'),
						'hinhanh'=>$this->input->post('hinhanh'),
						'hinhchitiet1'=>$this->input->post('hinhanhchitiet1'),
						'hinhchitiet2'=>$this->input->post('hinhanhchitiet2'),
						'hinhchitiet3'=>$this->input->post('hinhanhchitiet3'),
						'hinhchitiet4'=>$this->input->post('hinhanhchitiet4'),
						'mota'=>$this->input->post('mota'),
						'chitiet'=>$this->input->post('chitiet'),
						'gia'=>$this->input->post('gia'),
						'giakhuyenmai'=>$this->input->post('giakhuyenmai'),
						'noibat'=>$this->input->post('noibat'),
						'moi'=>$this->input->post('moi'),
						'soluong'=>$this->input->post('soluong')
			);
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
				$data['category']=$this->Msanpham->getListFull('n_t_danhmuc');
				$data['module']=$this->module;
				$data['title']='Thêm sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['page']='admin_sanpham_insert';
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				$this->form_validation->set_rules('gia','Giá','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Msanpham->insertNewRow('n_t_sanpham',$input))
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
				$data['category']=$this->Msanpham->getListFull('n_t_danhmuc');
				$data['module']=$this->module;
				$data['title']='Thêm sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['page']='admin_sanpham_insert';
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
				$data['category']=$this->Msanpham->getListFull('n_t_danhmuc');
				$data['info']=$this->Msanpham->getRowByColumn('n_t_sanpham','id',$id);
				$data['module']=$this->module;
				$data['title']='Sửa sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['page']='admin-sanpham-edit';
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('ten','Tên','required|trim');
				$this->form_validation->set_rules('gia','Giá','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Msanpham->updateRowByColumn('n_t_sanpham','id',$id,$input))
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
					$data['category']=$this->Msanpham->getListFull('n_t_danhmuc');
					$data['info']=$this->Msanpham->getRowByColumn('n_t_sanpham','id',$id);
					$data['module']=$this->module;
					$data['title']='Sửa sản phẩm';
					$data['bcCurrent']='Sản phẩm';
					$data['page']='admin-sanpham-edit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function deleteProductById($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('n_t_sanpham','id',$id))			
				$this->session->set_userdata('backend_product_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('backend_product_result','Dữ liệu chưa được xóa');
			$this->index();
		}
	}
?>