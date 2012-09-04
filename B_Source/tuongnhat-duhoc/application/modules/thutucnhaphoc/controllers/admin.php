<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());

			$this->load->model('Mthutucnhaphoc');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->library('form_validation') ;
	        $this->load->helper('url');
	        $this->load->helper('ckeditor');
	        $this->load->helper('date');
		}
	
		function index()
		{
			$this->edit(1);
		}
		
		function edit($id)
		{
			if($this->input->post('submit'))
			{
				$this->Mthutucnhaphoc->updateThuTucNhapHoc($id);
				redirect(base_url().'thutucnhaphoc/admin','refresh');
			}
			else
			{
				$this->siteEdit($id);	
			}
		}
		

		function siteEdit($id)
		{
			$data['thutuc']	=	$this->Mthutucnhaphoc->getThuTuc($id);
			$data['module'] = 	$this->module;
			$data['page'] 	= 	"admin_thuctucnhaphoc_edit";
			$data['title'] 	= 	"Pictures Manager";
			$data['bcCurrent'] = "Edit Pictures";
			
			$data['ckeditor_1'] = array(			
				'id'    =>   'content_1',
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
			$data['ckeditor_2'] = array(			
				'id'    =>   'content_2',
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
	}
?>