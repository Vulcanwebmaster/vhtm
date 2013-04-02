<?php
class lienhe extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mlienhe');
		$this->load->helper('text'); //cop vao controller
		$this->setLang();
		$this->loadLang();
	}
	
	function index()
	{
		$data['lang']=$this->session->userdata("lang");
		$data['list_tagv'] = $this->Mlienhe->getListFull('tagcloud');
		// Meta tags
		$data['list_slide']=$this->Mlienhe->getRowByColumn('slide','id','1');
		$data['list_tagscloud']=$this->Mlienhe->getListFull('tagcloud');
		$lienhe = $this->Mlienhe->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $lienhe->meta_lienhe;
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mlienhe->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mlienhe->getListFullODB('sanpham',6,'id','DESC');
		
		$data['title']='Niw - Liên hệ';
		$data['index']= 5 ;
		$data['module']=$this->module;
		$data['page']='vlienhe';
		$this->load->view('front/container',$data);
	}
	function _input()
	{
		$input=array(
					'hoten'=>$this->input->post('hoten'),
					'email'=>$this->input->post('email'),
					'noidung'=>$this->input->post('noidung'),
					);
		return $input;
	}
	
	function send()
	{
			$input=$this->_input();
			if ($this->Mlienhe->insertNewRow('lienhe',$input))
			{
				 $this->session->set_userdata('result','Gửi thành công !');
			}
			else $this->session->set_userdata('result','Gửi không thành công !');
		
		redirect(base_url().'lienhe','refresh');
	}
}