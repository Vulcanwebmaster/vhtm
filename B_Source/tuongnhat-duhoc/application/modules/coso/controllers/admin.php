<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());

			$this->load->model('Mcoso');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->library('form_validation') ;
	        $this->load->helper('url');
	        $this->load->helper('ckeditor');
	        $this->load->helper('date');
		}
		
		function index()
		{
			$data['query'] = $this->Mcoso->getListCoSo();
			$data['module'] = $this->module;
			$data['page'] = "admin_coso_home";
			$data['title'] = "Facilities Manager";
			
			$data['bcCurrent'] = "Facilities Manager";
			
			$this->load->view('admin/container',$data);
		}
		
		function edit($id)
		{
			if($this->input->post('submit'))
			{
				$this->Mcoso->updateCoSo($id);
				redirect(base_url().'coso/admin','refresh');
			}
			else 
			{
				$this->siteEdit($id);
			}
		}
		function siteEdit($id)
		{
			$data['coso']=$this->Mcoso->getCoSoID($id);
			$data['module'] = $this->module;
			$data['page'] = "admin_coso_edit";
			$data['title'] = "Facilities Manager";
			$data['bcCurrent'] = "Edit Facilities";
			
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
	}
?>