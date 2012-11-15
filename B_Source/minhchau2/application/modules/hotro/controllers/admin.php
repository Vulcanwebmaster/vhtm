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
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/minhchau2/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['title']='Hỗ trợ';
			$data['bcCurrent']='Hỗ trợ';
			$data['list']=$this->Mhotro->getListFull('hotro');
			$data['module']=$this->module;
			
			if ($this->input->post('ten1') || $this->input->post('sdt1') || $this->input->post('yahoo1')
			|| $this->input->post('ten2')  || $this->input->post('sdt2')  || $this->input->post('yahoo2')
			) 
			{
				
					$input1 = $this->_input_hotro1();
					$input2 = $this->_input_hotro2();
					if ($this->Mhotro->updateRowByColumn('hotro','id',1,$input1)
					&& $this->Mhotro->updateRowByColumn('hotro','id',2,$input2)
					) {
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
							'ten'=>$this->input->post('ten1'),
							'sdt'=>$this->input->post('sdt1'),
							'yahoo'=>$this->input->post('yahoo1')
						);
			return $input;
		}

		function _input_hotro2()
		{
			$input=array(
							'ten'=>$this->input->post('ten2'),
							'sdt'=>$this->input->post('sdt2'),
							'yahoo'=>$this->input->post('yahoo2')
						);
			return $input;
		}

	}
?>