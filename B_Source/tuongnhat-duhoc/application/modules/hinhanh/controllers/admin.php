<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());

			$this->load->model('Mhinhanh');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->library('form_validation') ;
	        $this->load->helper('url');
	        $this->load->helper('ckeditor');
	        $this->load->helper('date');
		}
	
		function index()
		{
			$data['query'] = $this->Mhinhanh->getListHinhAnh();
			$data['module'] = $this->module;
			$data['page'] = "admin_hinhanh_home";
			$data['title'] = "Pictures Manager";
			
			$data['bcCurrent'] = "Pictures Manager";
			
			$this->load->view('admin/container',$data);
		}
		
		function edit($id)
		{
			if($this->input->post('submit'))
			{
				$this->Mhinhanh->updateHinhAnh($id);
				redirect(base_url().'hinhanh/admin','refresh');
			}
			else
			{
				$this->siteEdit($id);	
			}
		}
		
		function siteEdit($id)
		{
			$data['hinhanh']=$this->Mhinhanh->getHinhAnhID($id);
			$data['module'] = $this->module;
			$data['page'] = "admin_hinhanh_edit";
			$data['title'] = "Pictures Manager";
			$data['bcCurrent'] = "Edit Pictures";
			
			$data['ckeditor'] = array(			
				'id'    =>   'content',
				'path'  =>   'assets/duhoc/js/ckeditor',	
					
				'config' => array(
				'toolbar'   =>   "Full",     
				'width'     =>   "98%",    
				'height'    =>   '200px', 
				'filebrowserBrowseUrl'      => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'   
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

		function add()
		{
			if($this->input->post('submit'))
			{
				$this->Mhinhanh->insertHinhAnh();
				redirect(base_url().'hinhanh/admin','refresh');
			}
			else
			{
				$this->siteAdd();
			}
		}

		function siteAdd()
		{
			$data['module'] = $this->module;
			$data['page'] = "admin_hinhanh_add";
			$data['title'] = "Pictures Manager";
			$data['bcCurrent'] = "Edit Pictures";
			
			$data['ckeditor'] = array(			
				'id'    =>   'content',
				'path'  =>   'assets/duhoc/js/ckeditor',	
					
				'config' => array(
				'toolbar'   =>   "Full",     
				'width'     =>   "98%",    
				'height'    =>   '200px', 
				'filebrowserBrowseUrl'      => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl'      => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url().'assets/duhoc/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'   
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
			$this->Mhinhanh->delete($id);
			redirect(base_url().'hinhanh/admin','refresh');
		}
	}
?>