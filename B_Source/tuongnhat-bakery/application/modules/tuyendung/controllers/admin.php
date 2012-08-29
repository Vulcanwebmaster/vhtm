<?php
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mtuyendung');
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
			$config['total_rows']=$this->Mtuyendung->countFull();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mtuyendung->getList($index);
			$data['module']=$this->module;
			$data['page']='admin-list-tuyendung';
			$data['title']='Tuyển dụng';
			$data['bcCurrent']='Tuyển dụng';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('ngaythang'=>$this->input->post('ngaythang'),
						'tieudev'=>$this->input->post('tieudev'),
						'tieudee'=>$this->input->post('tieudee'),
						'noidungv'=>$this->input->post('noidungv'),
						'noidunge'=>$this->input->post('noidunge')
			);
			return $input;
		}
		
		function insertNew()
		{
			if (!$this->input->post('tieudev'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='Thêm mới';
				$data['bcCurrent']='Tuyển dụng';
				$data['page']='admin-insert-tuyendung';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('tieudev','Tên (V)','required|trim');
				$this->form_validation->set_rules('noidungv','Nội dung (V)','required|trim');
				$this->form_validation->set_rules('ngaythang','Ngày tháng','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mtuyendung->insertNew($input))
					{
						$this->session->set_userdata('insert_tuyendung_result','Thêm thành công');
					}
					else $this->session->set_userdata('insert_tuyendung_result','Thêm thất bại');
					
					$this->index();
				}
				else
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Thêm mới';
					$data['bcCurrent']='Tuyển dụng';
					$data['page']='admin-insert-tuyendung';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function deleteById($id=0)
		{
			if ($this->Mtuyendung->deleteById($id))			
				$this->session->set_userdata('insert_tuyendung_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('insert_tuyendung_result','Dữ liệu chưa được xóa');
			$this->index();
		}
		
		function editById($id=0)
		{
			if (!$this->input->post('tieudev'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='Sửa đổi';
				$data['bcCurrent']='Tuyển dụng';
				$data['info']=$this->Mtuyendung->GetDetailById($id);
				$data['page']='admin-edit-tuyendung';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('tieudev','Tên (V)','required|trim');
				$this->form_validation->set_rules('noidungv','Nội dung (V)','required|trim');
				$this->form_validation->set_rules('ngaythang','Ngày tháng','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mtuyendung->editById($input,$id))
					{
						$this->session->set_userdata('insert_tuyendung_result','Cập nhật thành công');
					}
					else $this->session->set_userdata('insert_tuyendung_result','Cập nhật thất bại');
					
					$this->index();
				}
				else 
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Sửa đổi';
					$data['bcCurrent']='Tuyển dụng';
					$data['info']=$this->Mtuyendung->GetDetailById($id);
					$data['page']='admin-edit-tuyendung';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}
	}
?>