<?php
	class Thuvien extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mthuvien');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vthuvien';
			$data['module']=$this->module;		
			$data['listtype']=$this->Mthuvien->getListType();
			$data['flag_DanhMuc']=3;			
			$this->load->view($this->_container,$data);
		}
		
		function loadFull($index=0)
		{
			$config['base_url']=base_url().'index.php/thuvien/loadFull';
			$config['total_rows']=$this->Mthuvien->countFull();
			$config['per_page']=12;
			$this->pagination->initialize($config);
			
			$data['listfull']=$this->Mthuvien->getListFull($index);
			$this->load->view('shop/vlistfull',$data);
		}
		
		function load($index=0,$type=0)
		{
			$config['base_url']=base_url().'index.php/thuvien/load';
			$config['total_rows']=$this->Mthuvien->count($type);
			$config['per_page']=12;
			$this->pagination->initialize($config);
			
			$data['listfull']=$this->Mthuvien->getList($index,$type);
			$this->load->view('shop/vlistfull',$data);
		}
		
		//====================DETAIL==========================
		function detail($id=0)
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			$data['information']=$this->Mthuvien->getDetail($id);
			$data['type']=$this->Mthuvien->getNameType($id);
			$this->load->view($this->_container,$data);
		}
	}
?>