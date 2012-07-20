<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mwebsite');
		$this->load->helper('date');
		$this->load->library('editor_library');
	}
	
	public function index()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_website_main";
		$data['title'] = "Website";
		//Breadcrumb data
		$data['bcCurrent'] = "Website";
		
		$data['lst_categories'] = $this->Mwebsite->getListCategories();
		$this->load->view('admin/container',$data);
	}
	//Category Manager
	public function editCategory()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_website_editcategory";
		$data['title'] = "Website - Edit Category";
		$data['category'] = $this->Mwebsite->getCategoryByID();
		$data['lst_article'] = $this->Mwebsite->getLstArticleByCtg();		
		//Breadcrumb data
		$data['bcLv1']= "Website";
		$data['bcLv1_link']= "website/admin";
		$data['bcCurrent'] = "Edit Category";
		$this->load->view('admin/container',$data);
	}
	public function updateCategory()
	{
		if($this->Mwebsite->saveCategory())
		{
			$id=$this->uri->segment(4);
			redirect('website/admin/editCategory/'.$id);
		}
	}
	//Article Manager
	public function editArticle()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_website_editarticle";
		$data['title'] = "Website - Edit Article";
		$data['article'] = $this->Mwebsite->getArticleByID();
		$data['categories']=$this->Mwebsite->getListCategories();
		//Breadcrumb data
		$data['bcLv1']= "Website";
		$data['bcLv1_link']= "website/admin";
		$data['bcCurrent'] = "Edit Article";
		$this->load->view('admin/container',$data);
	}
	public function updateArticle()
	{
		if($this->Mwebsite->saveArticle())
		{
			$id=$this->uri->segment(4);
			redirect('website/admin/editArticle/'.$id);
		}
	}
	public function addArticle()
	{
		if($this->Mwebsite->insertArticle())
		{
			$id=$this->uri->segment(4);
			redirect('website/admin/editCategory/'.$id);
		}
	}
	public function delArticle()
	{
	  	if($this->Mwebsite->delArticle()==true)
  		{
  			$id=$this->uri->segment(4);
   			redirect('website/admin/editCategory/'.$id);
  		}
	}
	public function insertArticle()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_website_insertnewarticle";
		$data['title'] = "Website - Insert Article";
		//Breadcrumb data
		$data['bcLv1']= "Website";
		$data['bcLv1_link']= "website/admin";
		$data['bcCurrent'] = "Insert Article";
		
		$id = $this->uri->segment(4);
		if(isset($id))
		{
			$category = $this->uri->segment(4);
			$data['id_category'] = $category;
		}
		$data['categories']=$this->Mwebsite->getListCategories();
		$this->load->view('admin/container',$data);
	}

}

/* End of file admin.php */
/* Location: ./application/modules/website/controllers/admin.php */