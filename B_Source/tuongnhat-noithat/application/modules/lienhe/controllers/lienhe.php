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
		}
		
		function index()
		{
			//$data['category']=$this->Mlienhe->getCategoryName();
			$this->data['query']=$this->Mlienhe->getRowByColumn('tn_contacts','contact_id',1);
			//$data['listcate']=$this->Mlienhe->getListByColumn('mc_category','parent_id',0);
			$this->data['list']=$this->Mlienhe->getListFull('tn_contacts');
			//$data['list_lienhe']=$this->Mlienhe->getListFull('mc_contact_us');
			//$data['list_hotro']=$this->Mlienhe->getListFull('hotro');
			//$data['list_doitac']=$this->Mlienhe->getListFull('doitac');			
			$this->data['module']=$this->module;
					//var_dump($data); die();
			$this->data['page'] = 'vlienhe';
			$this->load->view('front/container',$this->data);
		}
		
		//Tuyet
		function send()
		{
			if($this->input->post='submit'){
				$this->form_validation->set_rules('name','Name','required');
				//$this->form_validation->set_message('required','please input Name ');
				$this->form_validation->set_rules('email','E-mail','required');
				$this->form_validation->set_rules('subject','Subject','required');
				$this->form_validation->set_rules('note','Message','required');
				$this->form_validation->set_message('required','%s please other one ');
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
							alert('Your comment is successful');
						</script>";
						redirect(base_url().'lienhe','refresh');
					}
				}
			}else{
				$this->load->view('vlienhe',$data);
			}
		}
		//end Tuyet
		
	}
	