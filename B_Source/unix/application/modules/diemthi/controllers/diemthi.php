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
	
		function page()
		{
			$config['base_url']=base_url().'index.php/diemthi/page';
			$config['per_page']=50;
			$config['uri_segment']=3;
			$config['total_rows']=$this->Mdiemthi->CountFull();
			$this->pagination->initialize($config);
			
			$dot=$this->session->userdata('dot');
			$data['tieude']='XEM ĐIỂM THI';
			$data['dotthi']=$this->Mdiemthi->getDotThi();
			$data['diemthi']=$this->Mdiemthi->getList($this->uri->segment(3),$dot);
			$data['page']=$this->config->item('backendpro_template_shop').'vxemdiemthi';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function index()
		{
	    	if($this->input->post('dot'))
			{
				$this->session->set_userdata('bang','Bảng '.$this->input->post('dot'));
				//echo $this->session->userdata('bang');die();
				$this->session->set_userdata('dot',$this->input->post('dot'));
				$this->page();
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