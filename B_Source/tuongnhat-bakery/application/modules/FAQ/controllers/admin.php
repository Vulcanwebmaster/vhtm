<?php
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mfaq');
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
			$config['total_rows']=$this->Mfaq->countFull();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mfaq->getList($index);
			$data['module']=$this->module;
			$data['page']='admin-list-faq';
			$data['title']='FAQ';
			$data['bcCurrent']='FAQ';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('ngaythang'=>$this->input->post('ngaythang'),
						'tieude'=>$this->input->post('tieude'),
						'noidung'=>$this->input->post('noidung'),
						'traloi'=>$this->input->post('traloi')
			);
			return $input;
		}
		
		function insertNew()
		{
			if (!$this->input->post('tieude'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='FAQ';
				$data['bcCurrent']='FAQ';
				$data['page']='admin-insert-faq';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('tieude','Tên','required|trim');
				$this->form_validation->set_rules('noidung','Nội dung','required|trim');
				$this->form_validation->set_rules('ngaythang','Ngày tháng','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mfaq->insertNew($input))
					{
						$this->session->set_userdata('insert_faq_result','Thêm thành công');
					}
					else $this->session->set_userdata('insert_faq_result','Thêm thất bại');
					
					$this->index();
				}
				else
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='FAQ';
					$data['bcCurrent']='FAQ';
					$data['page']='admin-insert-faq';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function deleteById($id=0)
		{
			if ($this->Mfaq->deleteById($id))			
				$this->session->set_userdata('insert_faq_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('insert_faq_result','Dữ liệu chưa được xóa');
			$this->index();
		}
		
		function editById($id=0)
		{
			if (!$this->input->post('tieude'))
			{
				//=============================================
				$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
				$data['config'] = $this->setupCKEditor();
				//=============================================
				
				$data['title']='Sửa đổi';
				$data['bcCurrent']='FAQ';
				$data['info']=$this->Mfaq->GetDetailById($id);
				$data['page']='admin-edit-faq';
				$data['module']=$this->module;
				$this->load->view('admin/container',$data);
			}
			else
			{
				$this->form_validation->set_rules('tieude','Tên (V)','required|trim');
				$this->form_validation->set_rules('noidung','Nội dung (V)','required|trim');
				$this->form_validation->set_rules('ngaythang','Ngày tháng','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được để trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_getInput();
					if ($this->Mfaq->editById($input,$id))
					{
						$this->session->set_userdata('insert_faq_result','Cập nhật thành công');
					}
					else $this->session->set_userdata('insert_faq_result','Cập nhật thất bại');
					
					$this->index();
				}
				else 
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Sửa đổi';
					$data['bcCurrent']='FAQ';
					$data['info']=$this->Mfaq->GetDetailById($id);
					$data['page']='admin-edit-faq';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
			}
		}
	}
?>