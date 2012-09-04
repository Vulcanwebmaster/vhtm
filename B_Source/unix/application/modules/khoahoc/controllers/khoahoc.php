<?php
	class Khoahoc extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mkhoahoc');
			$this->load->library('pagination');
		}
		
		function index()
		{
			/*$data['page']=$this->config->item('backendpro_template_shop').'vkhoahoc';
			$data['module']=$this->module;
			$data['listdoituong']=$this->Mkhoahoc->getListDoiTuong();
			$data['flag_DanhMuc']=1;
			$this->load->view($this->_container,$data);*/
			
			$data['page']=$this->config->item('backendpro_template_shop').'vdefault';
			$data['module']=$this->module;
			if($this->Mkhoahoc->get_KhoaHoc_Default())
				$data['info']=$this->Mkhoahoc->get_KhoaHoc_Default();
			$data['tieude']="KHÓA HỌC";
			$this->load->view($this->_container,$data);
		}
		
		function pages($id_doituong=0,$index=0)
		{
			$config['base_url']=base_url().'index.php/khoahoc/pages/'.$id_doituong;
			$config['total_rows']=$this->Mkhoahoc->count($id_doituong);
			$config['uri_segment']=4;
			$config['per_page']=4;
			$this->pagination->initialize($config);
			
			$data['page']=$this->config->item('backendpro_template_shop').'vkhoahoc';
			$data['module']=$this->module;
			//$data['flag_DanhMuc']=1;
			$data['id_doituong']=$id_doituong;
			$data['listdoituong']=$this->Mkhoahoc->getListDoiTuong();
			$data['list']=$this->Mkhoahoc->getlist($id_doituong,$index);
			$this->load->view($this->_container,$data);
		}
		
		function detail($id=0)
		{
			$data['tieude']='Chi tiết khóa học';
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			if ($this->Mkhoahoc->getInf($id))
				$data['info']=$this->Mkhoahoc->getInf($id);
			$this->load->view($this->_container,$data);
		}
	}
?>