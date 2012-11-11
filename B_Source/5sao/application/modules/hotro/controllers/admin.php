<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mhotro');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Hỗ trợ';
			$data['bcCurrent']='Hỗ trợ';
			$data['list']=$this->Mhotro->getListFull('hotro');
			$data['module']=$this->module;
			
			if ($this->input->post('sdt1') || $this->input->post('skype1') || $this->input->post('yahoo1')
			|| $this->input->post('sdt2')  || $this->input->post('skype2')  || $this->input->post('yahoo2')
			|| $this->input->post('sdt3')  || $this->input->post('skype3')  || $this->input->post('yahoo3')
			|| $this->input->post('hotline') || $this->input->post('sdt_hotline')) 
			{
				
					$input1 = $this->_input_hotro1();
					$input2 = $this->_input_hotro2();
					$input3 = $this->_input_hotro3();
					$input4 = $this->_input_hotline();
					if ($this->Mhotro->updateRowByColumn('hotro','id',1,$input1)
					&& $this->Mhotro->updateRowByColumn('hotro','id',2,$input2)
					&& $this->Mhotro->updateRowByColumn('hotro','id',3,$input3)
					&& $this->Mhotro->updateRowByColumn('hotro','id',5,$input4)) {
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
			$data['info']=$this->Mhotro->getListFull('hotro');
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
			$input=array(
							'sdt'=>$this->input->post('sdt1'),
							'skype'=>$this->input->post('skype1'),
							'yahoo'=>$this->input->post('yahoo1')
						);
			return $input;
		}

		function _input_hotro2()
		{
			$input=array(
							'sdt'=>$this->input->post('sdt2'),
							'skype'=>$this->input->post('skype2'),
							'yahoo'=>$this->input->post('yahoo2')
						);
			return $input;
		}

		function _input_hotro3()
		{
			$input=array(
							'sdt'=>$this->input->post('sdt3'),
							'skype'=>$this->input->post('skype3'),
							'yahoo'=>$this->input->post('yahoo3')
						);
			return $input;
		}
		
		function _input_hotline()
		{
			$input=array(
							'sdt'=>$this->input->post('sdt_hotline'),
							'hotline'=>$this->input->post('hotline'),
						);
			return $input;
		}
	}
?>