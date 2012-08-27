<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Msanpham');
			$this->load->library('pagination');
			$this->load->helper('ckeditor');
			
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$this->paging();
		}
		
		//================== PRODUCT ===========================================
		function paging($index=0)
		{
			$config['base_url']=base_url().'sanpham/admin/paging';
			$config['uri_segment']=4;
			$config['total_rows']=$this->Msanpham->countFullProduct();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Msanpham->getListProduct($index);
			$data['module']=$this->module;
			$data['page']='admin-list-product';
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('category_id'=>$this->input->post('danhmuc'),
						'product_name_vn'=>$this->input->post('tenv'),
						'product_name_en'=>$this->input->post('tene'),
						'product_units'=>$this->input->post('unit'),
						'product_cartons'=>$this->input->post('carton'),
						'product_sales_name_vn'=>$this->input->post('motav'),
						'product_sales_name_en'=>$this->input->post('motae'),
						'product_introductions_vn'=>$this->input->post('huongdanv'),
						'product_introductions_en'=>$this->input->post('huongdane'),
						'product_convection_oven_vn'=>$this->input->post('lodoiluuv'),
						'product_convection_oven_en'=>$this->input->post('lodoiluue'),
						'product_rotary_oven_vn'=>$this->input->post('loquayv'),
						'product_rotary_oven_en'=>$this->input->post('loquaye'),
						'product_nutrient_content_vn'=>$this->input->post('dinhduongv'),
						'product_nutrient_content_en'=>$this->input->post('dinhduonge'),
						'product_new'=>$this->input->post('spmoi'),
						'product_img'=>$this->input->post('hinhanh')
			);
			return $input;
		}
		
		function editProductById($id=0)
		{
			if (!$this->input->post('danhmuc'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='Sản phẩm';
				$data['bcCurrent']='Sản phẩm';
				$data['info']=$this->Msanpham->GetDetailProductById($id);
				$data['page']='admin-edit-product';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('danhmuc','Danh mục','required|trim');
				$this->form_validation->set_rules('tenv','Tên (V)','required|trim');
				$this->form_validation->set_rules('tene','Tên (E)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Msanpham->editProductById($input,$id))
					{
						$this->session->set_userdata('backend_product_result','Cập nhật thành công');
					}
					else $this->session->set_userdata('backend_product_result','Cập nhật thất bại');
					
					$this->index();
				}
				else 
				{
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					$data['title']='Sản phẩm';
					$data['bcCurrent']='Sản phẩm';
					$data['info']=$this->Msanpham->GetDetailProductById($id);
					$data['page']='admin-edit-product';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}

		function deleteProductById($id=0)
		{
			if ($this->Msanpham->deleteProductById($id))			
				$this->session->set_userdata('backend_product_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('backend_product_result','Dữ liệu chưa được xóa');
			$this->index();
		}
		
		function insertNewProduct()
		{
			if (!$this->input->post('danhmuc'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='Thêm sản phẩm mới';
				$data['bcCurrent']='Sản phẩm';
				$data['page']='admin-insert-product';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('danhmuc','Danh mục','required|trim');
				$this->form_validation->set_rules('tenv','Tên (V)','required|trim');
				$this->form_validation->set_rules('tene','Tên (E)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Msanpham->insertNewProduct($input))
					{
						$this->session->set_userdata('backend_product_result','Thêm thành công');
					}
					else $this->session->set_userdata('backend_product_result','Thêm thất bại');
					
					$this->index();
				}
				else
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Thêm sản phẩm mới';
					$data['bcCurrent']='Sản phẩm';
					$data['page']='admin-insert-product';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}
	}
?>