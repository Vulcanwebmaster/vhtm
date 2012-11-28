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
		
		function index($index=0)
		{
			$config['base_url']=base_url().'sanpham/admin/page/';
			$config['per_page']=1;
			$config['total_rows']=count($this->Msanpham->getListFull('xh_product'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin xe';
			$data['bcCurrent']='sản phẩm';
			$data['list']=$this->Msanpham->getListOffset('xh_product',1,$index);
			$data['module']=$this->module;
			$data['page']='admin_list_product';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('namev'=>$this->input->post('namev'),
						'category_id'=>$this->input->post('category_id'),
						'hangsx'=>$this->input->post('hangsx'),
						'price'=>$this->input->post('price'),
						'image'=>$this->input->post('image'),
						'mota'=>$this->input->post('mota'),
						'alias'=>$this->getAliasByName($this->input->post('namev')),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Msanpham->getListFull('xh_category');
				$data['title']='Thêm thông tin xe';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_insert_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Hãng xe','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->insertNewRow('xh_product',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('xh_category');
					$data['title']='Thêm thông tin xe';
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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/sieuthixehoi/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('namev'))
			{
				$data['list']=$this->Msanpham->getListFull('xh_category');
				$data['info']=$this->Msanpham->getRowByColumn('xh_product','id',$id);
				$data['title']='Sửa thông tin xe';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_edit_product';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('namev','Tên','required|trim');
				$this->form_validation->set_rules('category_id','Hãng xe','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Msanpham->updateRowByColumn('xh_product','id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Msanpham->getListFull('xh_category');
					$data['info']=$this->Msanpham->getRowByColumn('xh_product','id',$id);
					$data['title']='Sửa thông tin xe';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_edit_product';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('xh_product','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>