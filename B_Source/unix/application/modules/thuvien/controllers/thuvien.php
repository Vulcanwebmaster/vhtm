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
			/*$data['page']=$this->config->item('backendpro_template_shop').'vthuvien';
			$data['module']=$this->module;		
			$data['listtype']=$this->Mthuvien->getListType();
			
			$data['selected']=0;			
			$this->load->view($this->_container,$data);*/
			$this->loadFull();
		}
		
		function loadFull()
		{
			$data['flag_DanhMuc']=3;
			$data['listfull']=$this->Mthuvien->getListFull();
			$data['page']=$this->config->item('backendpro_template_shop').'vthuvien';
			$data['listtype']=$this->Mthuvien->getListType();
			$data['module']=$this->module;
			$data['selected']=0;
			$this->load->view($this->_container,$data);
		}
		
		function load($type=0)
		{
			$data['listfull']=$this->Mthuvien->getList($type);
			$data['page']=$this->config->item('backendpro_template_shop').'vthuvien';
			$data['listtype']=$this->Mthuvien->getListType();
			$data['module']=$this->module;
			$data['selected']=$type;
			$this->load->view($this->_container,$data);
		}
		
		//====================DETAIL==========================
		function detail($id=0)
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			$data['information']=$this->Mthuvien->getDetail($id);
			$data['type']=$this->Mthuvien->getNameType($data['information']->loaisach_id);
			$this->load->view($this->_container,$data);
		}
	}
?>