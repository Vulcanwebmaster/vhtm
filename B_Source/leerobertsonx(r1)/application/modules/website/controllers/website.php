<?php
	class Website extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mwebsite');
		}
		
		function index()
		{
			$data['page']='site/vwebsite';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			
			//Database datas
			$data['Ctg1'] = $this->Mwebsite->getCategoryByID_Front('1');
			$data['Ctg2'] = $this->Mwebsite->getCategoryByID_Front('2');
			$data['Ctg3'] = $this->Mwebsite->getCategoryByID_Front('3');
			$data['Ctg4'] = $this->Mwebsite->getCategoryByID_Front('4');
			$data['LstArt1'] = $this->Mwebsite->getLstArticleByCtg_Front('1')->result();
			$data['LstArt2'] = $this->Mwebsite->getLstArticleByCtg_Front('2')->result();
			$data['NumLstArt2'] = $this->Mwebsite->getLstArticleByCtg_Front('2')->num_rows();
			$data['LstArt3'] = $this->Mwebsite->getLstArticleByCtg_Front('3')->result();
			$data['LstArt4'] = $this->Mwebsite->getLstArticleByCtg_Front('4')->result();
			
			//End database datas
			$this->load->view('front/container',$data);
		}
		
		function detail($alias='')
		{
			$data['page']='site/vdetail';
			$data['module']=$this->module;
			$data['detail']=$this->Mwebsite->getInfoByAlias($alias);
			$data['maintitle']=$data['detail']->title;
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function pricingTable()
		{
			$data['page']='site/vpricingtable';
			$data['module']=$this->module;
			$data['maintitle']='Pricing Tables';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function webDesign()
		{
			$data['page']='site/vwebdesign';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function webDevelopement()
		{
			$data['page']='site/vwebdevelopement';
			$data['module']=$this->module;
			$data['maintitle']='Web developement';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function seo()
		{
			$data['page']='site/vseo';
			$data['module']=$this->module;
			$data['vcontent']=$this->Mwebsite->getInfoByAlias('seo');
			$data['maintitle']=$data['vcontent']->title;
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
	}
	
/* End of file website.php */
/* Location: ./application/modules/website/website.php */
