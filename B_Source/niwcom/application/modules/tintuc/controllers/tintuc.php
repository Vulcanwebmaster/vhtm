<?php
class tintuc extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mtintuc');
		$this->load->helper('text'); //cop vao controller
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->setLang();
		$this->loadLang();
		
	}
	
	function index()
	{
        $this->page();
	}
	function page()
	{
        // phân trang
        $config['base_url'] = base_url('tintuc/page'); // xác định trang phân trang
        $config['total_rows']=6; // xác định tổng số record
        $config['per_page'] = 5; // xác định số record ở mỗi trang
        // $config['uri_segment'] = 4; // xác định segment chứa page number            
       
         $this->pagination->initialize($config); 
		
		// $data['danhsach']= $this->Mtintuc->getListOffset('taikhoan',5,$index);
		$data['title']='Niw - Tin tức';
		$data['list2']=$this->Mtintuc->getListOffset123('tintuc',5,'duyet',1);
		

		// $data['list']=$this->Mtintuc->getListOffsetODB('tintuc',5,'id','DESC','duyet',1);
		$data['list_tagscloud']=$this->Mtintuc->getListFull('tagcloud');
		// Meta tags
		$tintuc = $this->Mtintuc->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $tintuc->meta_tintuc;
		$data['list_slide']=$this->Mtintuc->getRowByColumn('slide','id','1');
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mtintuc->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mtintuc->getListFullODB('sanpham',6,'id','DESC');
		$data['module']=$this->module;
		$data['lang']=$this->session->userdata("lang");
		$data['index']= 6 ;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
	function detail($id=0)
	{
		$data['tintuc']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
		$data['list_tagscloud']=$this->Mtintuc->getListFull('tagcloud');
		// Meta tags
		$tintuc = $this->Mtintuc->getRowByColumn('metatag','id',1);
		$data['meta_tag'] = $tintuc->meta_tintuc;
		$data['list_slide']=$this->Mtintuc->getRowByColumn('slide','id','1');
		// Lấy ra ds tin tức & sản phẩm ở footer
		$data['list_tintucft']=$this->Mtintuc->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
		$data['list_sanphamft']=$this->Mtintuc->getListFullODB('sanpham',6,'id','DESC');
		$model=new CI_Model();
		$data['module']=$this->module;
		$data['lang']=$this->session->userdata("lang");
		$data['index']= 6 ;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}
}