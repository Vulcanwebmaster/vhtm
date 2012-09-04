<?php
	class Hoithao extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhoithao');
			$this->load->library('pagination');
		}
		
		function index()
		{
			//$this->pages(0);
			$data['page']=$this->config->item('backendpro_template_shop').'vdefault';
			$data['module']=$this->module;
			if($this->Mhoithao->get_HoiThao_Default())
				$data['info']=$this->Mhoithao->get_HoiThao_Default();
			$data['tieude']="HỘI THẢO";
			$this->load->view($this->_container,$data);
			
		}
		
		function pages($start=0)
		{
			
			$full=count($this->Mhoithao->full());
			$config['base_url']=base_url()."index.php/hoithao/pages";
			$config['per_page']=5;
			$config['total_rows']=$full;
			$this->pagination->initialize($config);
			
			$data['page']=$this->config->item('backendpro_template_shop').'vhoithao';
			$data['module']=$this->module;
			$data['list']=$this->Mhoithao->getList($start);
			$this->load->view($this->_container,$data);
		}
		
		function detail($id)
		{
			$data['tieude']='Chi tiết hội thảo';
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			if ($this->Mhoithao->getInf($id))
				$data['info']=$this->Mhoithao->getInf($id);
			$this->load->view($this->_container,$data);
		}
	}
?>