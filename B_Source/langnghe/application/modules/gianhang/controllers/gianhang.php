<?php
	class Gianhang extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgianhang');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('url'); //You should autoload this one ;)
			$this->load->helper('ckeditor');
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'gianhang/admin/page/';
			$config['per_page']=3;
			$config['total_rows']=count($this->Mgianhang->getListFull('ln_village'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Gian hàng làng nghề';
			$data['bcCurrent']='Gian hàng làng nghề';
			$data['list']=$this->Mgianhang->getListFullsp('ln_village');
			$data['product']=$this->Mgianhang->getListOffset('ln_product',5,0);
			$data['module']=$this->module;
			$data['page']='vgianhang';
			$this->load->view('front/container',$data);	
		}
		
		function _input()
		{
			$input=array(
						'category_id'=>$this->input->post('category_name'),
						'village_name'=>$this->input->post('village_name'),
						'village_description'=>$this->input->post('village_description'),
						'alias'=>$this->getAliasByName($this->input->post('village_name')),
						);
			return $input;
		}
		
		function insert()
		{
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/langnghe/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//=============================================
			if (!$this->input->post('village_name'))
			{
				$data['list']=$this->Mgianhang->getListFull('ln_category');
				$data['title']='Thêm thông sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_insert_village';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('village_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgianhang->insertNewRow('ln_village',$input))
					{
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgianhang->getListFull('ln_category');
					$data['title']='Thêm thông làng nghề';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_insert_village';
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
			if (!$this->input->post('village_name'))
			{
				$data['list']=$this->Mgianhang->getListFull('ln_category');
				$data['info']=$this->Mgianhang->getRowByColumn('ln_village','village_id',$id);
				$data['title']='Sửa thông gian hàng';
				$data['bcCurrent']='gian hàng';
				$data['module']=$this->module;
				$data['page']='admin_edit_village';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('village_name','Tên','required|trim');
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgianhang->updateRowByColumn('ln_village','village_id',$id,$input))
					{
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgianhang->getListFull('ln_category');
					$data['info']=$this->Mgianhang->getRowByColumn('ln_village','village_id',$id);
					$data['title']='Sửa thông tin gian hàng';
					$data['bcCurrent']='Sản phẩm gian hàng';
					$data['module']=$this->module;
					$data['page']='admin_edit_village';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mgianhang->deleteRowByColumn('ln_village','village_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		
		
	}