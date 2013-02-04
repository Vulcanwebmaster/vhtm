<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msetting');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Msetting->getRowByColumn('fg_setting','id','1');
				$data['title']='Edit setting';
				$data['bcCurrent']='slide';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'phantramweb'=>$this->input->post('phantramweb'),
						'user_gold'=>$this->input->post('user_gold'),
						);
			return $input;
		}
	
		function setting(){
			$data['list_setting']  =  $this->Mgiaidau->getRowByColumn('fg_setting','id',$index);
			echo 'phantram : '.(($data['list_setting']->phantram))/100 . '%'; die();
			$data['list_tienthuong'] = $this->Mgiaidau->getListFull('fg_giaithuong');
			$data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_giaithuong','id',$index);
			echo 'Nhat :'.(($data['list_chitiet']->money_total)*50)/100 .'%';
			echo 'Nhi : '.(($data['list_chitiet']->money_total)*20)/100 .'%';
			echo 'Ba : '.(($data['list_chitiet']->money_total)*10)/100 .'%';
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('phantramweb','phantramweb 1','required|trim');
				
			$this->form_validation->set_message('required','category  %s not empty');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Msetting->updateRowByColumn('fg_setting','id',$id,$input))
				{
					$this->session->set_userdata('result','update success');
				}
				else $this->session->set_userdata('result','update success');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Msetting->getRowByColumn('fg_setting','id',$id);
				$data['title']='Edit setting';
				$data['bcCurrent']='setting';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
	}
