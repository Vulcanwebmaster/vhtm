<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mhomepage');
			$this->load->database();
			
			$this->load->helper('ckeditor');
		}
		
		function index()
		{
			//================SET UP CKEDITOR=============================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/tuongnhat/js/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//==============================================================
			
			$data['column1']=$this->Mhomepage->getRowById('1');
			$data['column2']=$this->Mhomepage->getRowById('2');
			$data['column3']=$this->Mhomepage->getRowById('3');
			$data['column4']=$this->Mhomepage->getRowById('4');
			
			$data['title']='Trang chủ';
			$data['bcCurrent']='Trang chủ';
			$data['page']='admin_list_homepage';
			$data['module']=$this->module;
			
			$this->load->view('admin/container',$data);
		}
		
		function getInput($column=1)
		{
			if ($column==1)
			{
				$input=array('tenv'=>$this->input->post('tenv1'),
							'tene'=>$this->input->post('tene1'),
							'noidungv'=>$this->input->post('noidungv1'),
							'noidunge'=>$this->input->post('noidunge1')
				);
				return $input;
			}
			else if ($column==2)
			{
				$input=array('tenv'=>$this->input->post('tenv2'),
							'tene'=>$this->input->post('tene2'),
							'noidungv'=>$this->input->post('noidungv2'),
							'noidunge'=>$this->input->post('noidunge2')
				);
				return $input;
			}
			else if ($column==3)
			{
				$input=array('tenv'=>$this->input->post('tenv3'),
							'tene'=>$this->input->post('tene3'),
							'noidungv'=>$this->input->post('noidungv3'),
							'noidunge'=>$this->input->post('noidunge3')
				);
				return $input;
			}
			else if ($column==4)
			{
				$input=array('tenv'=>$this->input->post('tenv4'),
							'tene'=>$this->input->post('tene4'),
							'noidungv'=>$this->input->post('noidungv4'),
							'noidunge'=>$this->input->post('noidunge4')
				);
				return $input;
			}
		}
		
		function update()
		{
			$input1=$this->getInput(1);
			$input2=$this->getInput(2);
			$input3=$this->getInput(3);
			$input4=$this->getInput(4);
			if ($this->Mhomepage->update(1,$input1) && $this->Mhomepage->update(2,$input2) && $this->Mhomepage->update(3,$input3) && $this->Mhomepage->update(4,$input4))
			{
				$this->session->set_userdata('homepage-update-result','Cap nhat thanh cong');
			}
			else $this->session->set_userdata('homepage-update-result','Cap nhat khong thanh cong');
			
			$this->index();
		}
	}
?>