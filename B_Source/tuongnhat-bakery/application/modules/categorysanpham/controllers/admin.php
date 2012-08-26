<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends Admin_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mcategorysanpham');
			$this->load->library('editor_library');
			$this->load->helper('ckeditor');
			//Load language:
			//$this->SetLang();		
			if ($this->session->userdata('lang')=='vn')
				$this->lang->load('tuongnhat','vietnamese');
			else 
				$this->lang->load('tuongnhat','english');
		}		
		function index()
		{
			//paging
			$baseurl = base_url().'categorysanpham/admin/index';
			$totalrow = $this->Mcategorysanpham->getCategoryRow();
			$perpage = 3;
			$urisegment = 4;
			$config = $this->PagingConfig($baseurl,$totalrow,$perpage,$urisegment);
			$this->pagination->initialize($config);
			$data['listpaging']=$this->Mcategorysanpham->getCategory($config['per_page'],$this->uri->segment(4));
			$data['paging'] = $this->pagination->create_links();
			//
			if(!$this->input->post('ajax_category'))
			{
				$data['module']=$this->module;
				$data['page']="admin_category_vcategory";
				$data['title'] = $this->lang->line('category-admin-product-category');
				//Breadcrumb data
				$data['bcCurrent'] = $this->lang->line('category-admin-product-category');
				
				$this->load->view('admin/container',$data);
			}
			else {
				$this->load->view('admin/admin_category_vcategory_ajax',$data);
			}
			
		}
		function getUpdateCategory()
		{
			$data['catogories_decription_en']=$this->setupCKEditor('catogories_decription_en');
			$data['catogories_decription_vn']=$this->setupCKEditor('catogories_decription_vn');
			$data['category_image']=$this->setupCKEditor('category_image');
			
			$data['product']=$this->Mcategorysanpham->getDetailCategory();
			$data['module'] = $this->module;
			$data['title'] = "Detail Category Product";
			$data['page'] = "admin_category_vupdate";
			//Breadcrumb data
			$data['bcLv1']= $this->lang->line('category-admin-product-category');
			$data['bcLv1_link']= "categorysanpham/admin";
			$data['bcCurrent'] = $this->lang->line('category-admin-update-category');
			$this->load->view('admin/container',$data);
		}
		function updateCategory()
		{
			if($this->Mcategorysanpham->updateCategory()==TRUE)
			{
				redirect('categorysanpham/admin');
			}
		}
		function getInsertCategory()
		{
			//$this->load->library ('ckeditor_php5',array('instanceName' => 'category_image','basePath'=> base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
			//$config = array();
			//$config['toolbar'] = array(
			//        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
			//        array( 'Image', 'Link', 'Unlink', 'Anchor' )
			//);
			//$config['filebrowserBrowseUrl'] = base_url()."assets/bakery/js/ckeditor/ckfinder/ckfinder.html";
			//$config['filebrowserImageBrowseUrl'] = base_url()."assets/bakery/js/ckeditor/ckfinder/ckfinder.html?type=Images";
			//$config['filebrowserUploadUrl'] =base_url()."assets/bakery/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
			//$config['filebrowserImageUploadUrl'] =base_url()."assets/bakery/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
			//$config[‘toolbar’]="Full";
			//$config[‘width’]="97%";
			//$config[‘height’]="100px";
			//$data['category_image'] = $this->ckeditor->editor("mi-textarea", "<p>Valor inicial.</p>",$config);
			
			
			
			$data['catogories_decription_en']=$this->setupCKEditor('catogories_decription_en');
			$data['catogories_decription_vn']=$this->setupCKEditor('catogories_decription_vn');
			$data['category_image']=$this->setupCKEditor('category_image');
			
			$data['module'] = $this->module;
			$data['title'] = "Insert Category Product";
			$data['page'] = "admin_category_insert";
			//Breadcrumb data
			$data['bcLv1']= $this->lang->line('category-admin-product-category');
			$data['bcLv1_link']= "categorysanpham/admin";
			$data['bcCurrent'] = $this->lang->line('category-admin-insert-new');
			$this->load->view('admin/container',$data);
		}
		function insertCategory()
		{
			if($this->Mcategorysanpham->insertCategory()==true)
			{
				redirect('categorysanpham/admin');
			}
		}
		function delCategory()
		{
			if($this->Mcategorysanpham->delCategory()==TRUE)
			{
				redirect('categorysanpham/admin');
			}
		}
}
?>