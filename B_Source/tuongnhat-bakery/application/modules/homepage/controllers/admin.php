<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mhomepage');
			$this->load->database();
			
			$this->load->helper('ckeditor');
		}
		
		function index()
		{
			$this->paging(0);
		}
		
		function paging($index=0)
		{
			$config['base_url']=base_url().'homepage/admin/paging';
			$config['uri_segment']=4;
			$config['total_rows']=$this->Mhomepage->countFullMenu();
			$config['per_page']=6;
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mhomepage->getListMenu($index);
			$data['module']=$this->module;
			$data['page']='admin_list_homepage';
			$data['title']='Menu phải';
			$data['bcCurrent']='Menu phải';
			$this->load->view('admin/container',$data);
		}
		
		function _getInput()
		{
			$input=array('hinhanh'=>$this->input->post('hinhanh'),
						'tieudev'=>$this->input->post('tieudev'),
						'tieudee'=>$this->input->post('tieudee'),
						'link'=>$this->input->post('link')
			);
			return $input;
		}
		
		function insertNewMenu()
		{
			if (!$this->input->post('tieudev'))
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Thêm menu mới';
					$data['bcCurrent']='Menu phải';
					$data['page']='admin_insert_homepage';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
				else
				{
					$this->form_validation->set_rules('tieudev','Tiêu đề (V)','required|trim');
					
					$this->form_validation->set_message('required','Mục %s không được để trống');
					
					if ($this->form_validation->run())
					{
						$input=$this->_getInput();
						if ($this->Mhomepage->insertNewMenu($input))
						{
							$this->session->set_userdata('homepage-update-result','Thêm thành công');
						}
						else $this->session->set_userdata('homepage-update-result','Thêm thất bại');
						
						$this->index();
					}
					else
					{
						//=============================================
						$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
						$data['config'] = $this->setupCKEditor();
						//=============================================
						
						$data['title']='Thêm menu mới';
						$data['bcCurrent']='Menu phải';
						$data['page']='admin_insert_homepage';
						$data['module']=$this->module;
						$this->load->view('admin/container',$data);
					}
				}
		}
		
		function editMenuById($id=0)
		{
			if (!$this->input->post('tieudev'))
				{
					//=============================================
					$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
					$data['config'] = $this->setupCKEditor();
					//=============================================
					
					$data['title']='Sửa menu mới';
					$data['bcCurrent']='Menu phải';
					$data['info']=$this->Mhomepage->GetDetailById($id);
					$data['page']='admin-edit-homepage';
					$data['module']=$this->module;
					$this->load->view('admin/container',$data);
				}
				else
				{
					$this->form_validation->set_rules('tieudev','Tiêu đề (V)','required|trim');
					
					$this->form_validation->set_message('required','Mục %s không được để trống');
					
					if ($this->form_validation->run())
					{
						$input=$this->_getInput();
						if ($this->Mhomepage->editMenuById($input,$id))
						{
							$this->session->set_userdata('homepage-update-result','Cập nhật thành công');
						}
						else $this->session->set_userdata('homepage-update-result','Cập nhật thất bại');
						
						$this->index();
					}
					else 
					{
						//=============================================
						$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
						$data['config'] = $this->setupCKEditor();
						//=============================================
						
						$data['title']='Sửa menu mới';
						$data['bcCurrent']='Menu phải';
						$data['info']=$this->Mhomepage->GetDetailById($id);
						$data['page']='admin-edit-homepage';
						$data['module']=$this->module;
						$this->load->view('admin/container',$data);
					}
				}
		}
		
		function deleteMenuById($id=0)
		{
			if ($this->Mhomepage->deleteMenuById($id))			
				$this->session->set_userdata('insert_homepage_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('insert_homepage_result','Dữ liệu chưa được xóa');
			$this->index();
		}
	}
?>