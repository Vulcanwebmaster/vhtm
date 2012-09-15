<?php
	class Lienhe extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			
			$this->load->model('Mlienhe');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->setLang();
			
			if ($this->session->userdata('lang')=='vn')
			{
				$this->lang->load('mc','vietnamese');
			}
			else $this->lang->load('mc','english');
		}
		
		function index()
		{
			$data['parents']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$data['query']=$this->Mlienhe->getRowByColumn('mc_contact_us','id',1);
			$data['listcate']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$data['list']=$this->Mlienhe->getListFull('mc_contact_us');
			$data['module']=$this->module;
					
			$data['page'] = 'vlienhe';
			$this->load->view('front/container',$data);
		}
		
		function send()
		{
			$this->form_validation->set_rules('contact_email',$this->lang->line('contact-email'),'required');
			$this->form_validation->set_rules('contact_question',$this->lang->line('contact-chitiet'),'required');
			$this->form_validation->set_message('required','%s '.$this->lang->line('contact-notice'));
			if($this->form_validation->run()==false)
			{
				$this->index();
			}
			else 
			{
				if($this->Mlienhe->insertContact())
				{
					echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
					echo "<script type='text/javascript'>
						alert('".$this->lang->line('contact-send')."');
					</script>";
					redirect(base_url().'lienhe','refresh');
				}
			}
		}
	}
?>