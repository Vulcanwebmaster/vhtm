<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());

			$this->load->model('Mkhoahoc');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->library('form_validation') ;
	        $this->load->helper('url');
	        $this->load->helper('ckeditor');
	        $this->load->helper('date');
		}
		
		function index()
		{
			$config['base_url'] = base_url('khoahoc/admin/index');
			$config['total_rows'] = $this->Mkhoahoc->count_all();
			$config['per_page'] = 7;
			$config['uri_segment'] = 4;
			$this->pagination->initialize($config); 
			$data['query'] = $this->Mkhoahoc->list_khoahoc($config['per_page'],$this->uri->segment(4));
			$data['module'] = $this->module;
			$data['page'] = "admin_list_khoahoc";
			$data['title'] = "Courses Manager";
			
			$data['bcCurrent'] = "Courses List";
			
			$this->load->view('admin/container',$data);
		}
		
		
		
		function add()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('ten','Tên khóa học','required');
				$this->form_validation->set_message('required','%s không được để trống');

				if($this->form_validation->run())
				{
					
					$this->Mkhoahoc->insert();
					redirect(base_url().'khoahoc/admin','refresh');
				}
				else 
				{
					$this->siteAdd();
				}
			}
			else
			{
				$this->siteAdd();
			}
		}
			
		function siteAdd()
		{
			$data['tiente']=$this->Mkhoahoc->list_tiente();
			$data['query']=$this->Mkhoahoc->list_loaikhoahoc();
			$data['module'] = $this->module;
			$data['page'] = "admin_add_khoahoc";
			$data['title'] = "Courses Manager";
			$data['bcCurrent'] = "Add Courses";
			
			$data['ckeditor'] = array(			
				'id'    =>   'content',
				'path'  =>   'assets/js/ckeditor',	
					
				'config' => array(
				'toolbar'   =>   "Full",     
				'width'     =>   "98%",    
				'height'    =>   '100px', 
				'filebrowserBrowseUrl'      => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'   
				),
				
				'styles' => array(
				
					'style 1' => array (
						'name'      =>   'Blue Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'     =>   'Blue',
							'font-weight'   =>   'bold'
						)
					),
						
					'style 2' => array (
						'name'  =>   'Red Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'         =>   'Red',
							'font-weight'       =>   'bold',
							'text-decoration'   =>   'underline'
						)
					)
				)
			);
			
			$this->load->view('admin/container',$data);		
		}
		
		function edit($id)
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('ten','Tên khóa học','required');
				$this->form_validation->set_message('required','%s không được để trống');

				if($this->form_validation->run())
				{
					$this->Mkhoahoc->update($id);
					redirect(base_url().'khoahoc/admin','refresh');
				}
				else 
				{
					$this->siteEdit($id);
				}
			}	
			else
			{
				$this->siteEdit($id);
			}
		}
		function siteEdit($id)
		{
			$data['khoahoc']=$this->Mkhoahoc->get_khoahoc($id);
			$data['query']=$this->Mkhoahoc->list_loaikhoahoc();
			$data['module'] = $this->module;
			$data['page'] = "admin_edit_khoahoc";
			$data['title'] = "Courses Manager";
			$data['bcCurrent'] = "Edit Courses";
			
			$data['ckeditor'] = array(			
				'id'    =>   'content',
				'path'  =>   'assets/js/ckeditor',	
					
				'config' => array(
				'toolbar'   =>   "Full",     
				'width'     =>   "98%",    
				'height'    =>   '200px', 
				'filebrowserBrowseUrl'      => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'assets/js/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'assets/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'   
				),
				
				'styles' => array(
				
					'style 1' => array (
						'name'      =>   'Blue Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'     =>   'Blue',
							'font-weight'   =>   'bold'
						)
					),
						
					'style 2' => array (
						'name'  =>   'Red Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'         =>   'Red',
							'font-weight'       =>   'bold',
							'text-decoration'   =>   'underline'
						)
					)
				)
			);
			
			$this->load->view('admin/container',$data);	
		}
		function delete($id)
		{
			$this->Mkhoahoc->delete($id);
			$this->index();
		}
	}
?>