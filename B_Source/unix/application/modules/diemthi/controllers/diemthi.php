<?php
	class Diemthi extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mdiemthi');
			$this->load->library('pagination');
			$this->load->library('session');
			$this->load->helper('url');
		}
	
		function page($dot)
		{
			$config['base_url']		=	base_url().'index.php/diemthi/page/'.$dot.'/';
			$config['per_page']		=	50;
			$config['uri_segment']	=	4;
			$config['total_rows']	=	$this->Mdiemthi->CountFull($dot);
			$this->pagination->initialize($config);
			
			$data['tendot']='Bảng '.$this->Mdiemthi->getTenDot($dot);
			$data['tieude']='XEM ĐIỂM THI';
			$data['dotthi']=$this->Mdiemthi->getDotThi();
			$data['diemthi']=$this->Mdiemthi->getList($this->uri->segment(4),$dot);
			$data['page']=$this->config->item('backendpro_template_shop').'vxemdiemthi';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function index()
		{
	    	if($this->input->post('dot'))
			{
				$dot=$this->input->post('dot');
				redirect(base_url().'index.php/diemthi/page/'.$dot,'refresh');
			}
			else 
			{
				$data['tieude']='XEM ĐIỂM THI';
				$data['dotthi']=$this->Mdiemthi->getDotThi();
				$data['page']=$this->config->item('backendpro_template_shop').'vxemdiemthi';
				$data['module']=$this->module;
				$this->load->view($this->_container,$data);
			}
		}
		

	}	
		
?>