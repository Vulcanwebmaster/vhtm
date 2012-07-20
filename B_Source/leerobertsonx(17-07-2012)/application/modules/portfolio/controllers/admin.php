<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mportfolio');
		$this->load->helper('date');
		$this->load->library('editor_library');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_portfolio_main";
		$data['title'] = "Portfolio";
		//Breadcrumb data
		$data['bcCurrent'] = "Portfolio";
		
		$data['lst_categories'] = $this->Mportfolio->getListCategories();
		$this->load->view('admin/container',$data);
	}
	//Category
	public function delCategory() 
	{
		
	}
	public function editCategory()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_portfolio_editcategory";
		$data['title'] = "PortFolio - Edit Category";
		$data['category'] = $this->Mportfolio->getCategoryByID();
		$data['lst_portfolio'] = $this->Mportfolio->getLstPortFolioByCtg();		
		//Breadcrumb data
		$data['bcLv1']= "Portfolio";
		$data['bcLv1_link']= "portfolio/admin";
		$data['bcCurrent'] = "Edit Category";
		$this->load->view('admin/container',$data);
	}
	//PortFolio
	public function editPortFolio()
	{
		$data['module'] = $this->module;
		$data['page'] = "admin_portfolio_editportfolio";
		$data['title'] = "PortFolio - Edit Portfolio";
		
		//Breadcrumb data
		$data['bcLv1']= "Portfolio";
		$data['bcLv1_link']= "portfolio/admin";
		$data['bcCurrent'] = "Edit Portfolio";
		
		$data['portfolio'] = $this->Mportfolio->getPortFolioByID();
		$data['categories']=$this->Mportfolio->getListCategories();
		$data['ctg_portfolio']=$this->Mportfolio->getListCategoriesByPortfolio();
		$data['types']=$this->Mportfolio->getListTypes();
		$this->load->view('admin/container',$data);
	}
	public function updatePortFolio()
	{
		if($this->Mportfolio->updatePortFolio())
		{
			$id=$this->uri->segment(4);
			redirect('portfolio/admin/editPortFolio/'.$id);
		}
	}
	public function insertPortFolio()
	{
		
	}
}

/* End of file admin.php */
/* Location: ./application/modules/portfolio/controllers/admin.php */