<?php
	class tagcloud extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mtagcloud');
			$this->load->library('session');
			$this->load->helper('text'); //cop vao controller
			$this->setLang();
			$this->loadLang();
		}

		function index()
		{
			$this->page();	
		}
		function page($id)
		{
			$data['lang']=$this->session->userdata("lang");
			$list_tinbyidtag=$this->Mtagcloud->getListByColumn('tintuc_tags','id_tags',$id);
			
			foreach ($list_tinbyidtag as $value) {
				$data=$this->Mtagcloud->getListByColumn('tintuc','id',$value->id_tintuc);
			}
			$data['list_tintags'] = $data;
			
			$data['list_tintucft'] =$this->Mtagcloud->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
			$data['list_sanphamft']=$this->Mtagcloud->getListFullODB('sanpham',6,'id','DESC');
			$data['list_tagscloud']=$this->Mtagcloud->getListFull('tagcloud');
			$data['module']=$this->module;
			$data['page']='vtagcloud';
			$this->load->view('front/container',$data);			
		}
	}
?>