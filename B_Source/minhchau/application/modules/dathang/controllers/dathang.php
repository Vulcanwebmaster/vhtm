<?php
class Dathang extends NIW_controller {
	private $module;
	function __construct()
	{
		parent::__construct();
		$this->module = strtolower(get_class());
		
		$this->load->model('Mdathang');
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
		$data['listcate']=$this->Mdathang->getListByColumn('mc_category','parent_id',0);
		$data['module']=$this->module;
		$data['page']='vdathang';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array('name'=>$this->input->post('name'),
					'address'=>$this->input->post('address'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'),
					'content'=>$this->input->post('content'),
					'date'=>date('Y-m-d'));
		return $input;
	}
	
	function dat()
	{
		$this->form_validation->set_rules('name',$this->lang->line('order-ten'),'required|trim');
		$this->form_validation->set_rules('address',$this->lang->line('order-diachi'),'required|trim');
		$this->form_validation->set_rules('phone',$this->lang->line('order-dt'),'required|trim');
		$this->form_validation->set_rules('email',$this->lang->line('order-email'),'required|trim|valid_email');
		$this->form_validation->set_rules('content',$this->lang->line('order-noidung'),'required|trim');
		
		$this->form_validation->set_message('required','Trường %s không được bỏ trống');
		$this->form_validation->set_message('valid_email','Trường %s phải đúng định dạng email');
		
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			if ($this->Mdathang->insertNewRow('mc_order',$input))
			{
				$this->session->set_userdata('dathang','Đặt hàng thành công');
			}
			else $this->session->set_userdata('dathang','Đặt hàng không thành công');
		}
		$data['listcate']=$this->Mdathang->getListByColumn('mc_category','parent_id',0);
		$data['module']=$this->module;
		$data['page']='vdathang';
		$this->load->view('front/container',$data);
	}
}
?>