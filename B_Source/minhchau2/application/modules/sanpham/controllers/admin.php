<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='sản phẩm';
			$data['bcCurrent']='sản phẩm';
			$data['list']=$this->Msanpham->getListFull('mc_product');
			$data['module']=$this->module;
			$data['page']='admin_list_product';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('namev'=>$this->input->post('namev'),
						'namee'=>$this->input->post('namee'),
						'category_id'=>$this->input->post('category_id'),
						'price'=>$this->input->post('price'),
						'usesv'=>$this->input->post('usesv'),
						'usese'=>$this->input->post('usese'),
						'technical_infov'=>$this->input->post('technical_infov'),
						'technical_infoe'=>$this->input->post('technical_infoe'),
						'image'=>$this->input->post('image'),
						'is_new'=>$this->input->post('is_new'));
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau2/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Msanpham->getListFull('mc_category');
				$data['title']='Thêm sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_insert_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->insertNewRow('mc_product',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('mc_category');
					$data['title']='Thêm sản phẩm';
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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau2/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Msanpham->getListFull('mc_category');
				$data['info']=$this->Msanpham->getRowByColumn('mc_product','id',$id);
				$data['title']='Sửa sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_edit_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Danh mục','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->updateRowByColumn('mc_product','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('mc_category');
					$data['info']=$this->Msanpham->getRowByColumn('mc_product','id',$id);
					$data['title']='Sửa sản phẩm';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_edit_product';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('mc_product','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>