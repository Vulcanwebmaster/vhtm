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
			$this->loadFull();
		}
		
		function loadFull($loaisach_id=0, $index=0)
		{
			$config['base_url']=base_url().'index.php/thuvien/loadFull/'.$loaisach_id;
			$config['total_rows']=$this->Mthuvien->countFull($loaisach_id);
			$config['per_page']=4;
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['flag_DanhMuc']=3;
			$data['listfull']=$this->Mthuvien->getListFull($loaisach_id, $index);
			$data['page']=$this->config->item('backendpro_template_shop').'vthuvien';
			$data['listtype']=$this->Mthuvien->getListType();
			$data['module']=$this->module;
			$data['selected']=$loaisach_id;
			$data['tieude']="THƯ VIỆN";
			$this->load->view($this->_container,$data);
		}
		
		function load($type=0)
		{
			$this->loadFull($type,0);
		}
		
		//====================DETAIL==========================
		function detail($id=0)
		{
			$data['flag_DanhMuc']=3;
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			$data['information']=$this->Mthuvien->getDetail($id);
			$data['type']=$this->Mthuvien->getNameType($data['information']->loaisach_id);
			$this->load->view($this->_container,$data);
		}
	}
?>