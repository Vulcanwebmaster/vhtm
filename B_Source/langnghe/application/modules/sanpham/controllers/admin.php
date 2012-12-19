<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Msanpham');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'sanpham/admin/page/';
			$config['per_page']=3;
			$config['total_rows']=count($this->Msanpham->getListFull('ln_product'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Sản phẩm làng nghề';
			$data['bcCurrent']='Sản phẩm làng nghề';
			$data['list']=$this->Msanpham->getListFullsp('ln_product');
			$listCategories=array();
			$data['listCategories']=$listCategories;
			$data['module']=$this->module;
			$data['page']='admin_list_product';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'category_id'=>$this->input->post('category_name'),
						'product_name'=>$this->input->post('product_name'),
						'discription'=>$this->input->post('discription'),
						'alias'=>$this->getAliasByName($this->input->post('product_name')),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('product_name'))
			{
				$data['list']=$this->Msanpham->getListFull('ln_category');
				$data['title']='Thêm thông sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_insert_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('product_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->insertNewRow('ln_product',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('ln_category');
					$data['title']='Thêm thông sản phẩm';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_insert_product';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function edit($id=0)
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('product_name'))
			{
				$data['list']=$this->Msanpham->getListFull('ln_category');
				$data['info']=$this->Msanpham->getRowByColumn('ln_product','product_id',$id);
				$data['title']='Sửa thông sản phẩm';
				$data['bcCurrent']=' Sản phẩm làng nghề';
				$data['module']=$this->module;
				$data['page']='admin_edit_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('product_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->updateRowByColumn('ln_product','product_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('ln_category');
					$data['info']=$this->Msanpham->getRowByColumn('ln_product','product_id',$id);
					$data['title']='Sửa thông sản phẩm';
					$data['bcCurrent']='Sản phẩm làng nghề';
					$data['module']=$this->module;
					$data['page']='admin_edit_product';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('ln_product','product_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		
		
	}