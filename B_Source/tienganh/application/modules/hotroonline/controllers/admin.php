<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhotroonline');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Hỗ trợ';
			$data['bcCurrent']='Hỗ trợ';
			$data['list']=$this->Mhotroonline->getListFull('hotroonline');
			$data['module']=$this->module;
			
			if ($this->input->post('sdt1')||$this->input->post('name1') || $this->input->post('skype1') || $this->input->post('yahoo1')
			|| $this->input->post('sdt2')|| $this->input->post('name2')  || $this->input->post('skype2')  || $this->input->post('yahoo2')) 
			{
				//var_dump($this->input->post('name1')); die();
					$input1 = $this->_input_hotro1();
					$input2 = $this->_input_hotro2();
					if ($this->Mhotroonline->updateRowByColumn('hotroonline','id',1,$input1)
					&& $this->Mhotroonline->updateRowByColumn('hotroonline','id',2,$input2)) {
						echo '<meta charset="UTF-8"/>';
						echo '<script language=javascript>
							alert("Cập nhật thành công");
						</script>';
					} else {
						echo '<meta charset="UTF-8"/>';
						echo '<script language=javascript>
							alert("Cập nhật không thành công");
						</script>';
					}
			}
			$data['info']=$this->Mhotroonline->getListFull('hotroonline');
			$data['page']='admin_vedit';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array();
			return $input;
		}
		
		function _input_hotro1()
		{
			$input=array(	'name'=>$this->input->post('name1'),
							'sdt'=>$this->input->post('sdt1'),
							'skype'=>$this->input->post('skype1'),
							'yahoo'=>$this->input->post('yahoo1')
						);
			return $input;
		}

		function _input_hotro2()
		{
			$input=array(	'name'=>$this->input->post('name2'),
							'sdt'=>$this->input->post('sdt2'),
							'skype'=>$this->input->post('skype2'),
							'yahoo'=>$this->input->post('yahoo2')
						);
			return $input;
		}
		
	}
