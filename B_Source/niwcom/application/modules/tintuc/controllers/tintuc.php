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
	function page($index=0)
	{
        $config['base_url'] = base_url().'tintuc/page';
		$config['per_page'] = 5;
		$config['total_rows'] = count($this->Mtintuc->getListByColumn('tintuc','duyet',1));
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
				
				//phai limit de lay so trang can phan
		//$data['items'] = $this->Mtintuc->getListOffset('tintuc',4,$index);
	    $data['list2']=$this->Mtintuc->getListOffset123('tintuc',5,'duyet',1,$index);
		$data['list_tagv'] = $this->Mtintuc->getListFull('tagcloud');
		$data['title']='Niw - Tin tức';
		

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
		$data['list_tagv'] = $this->Mtintuc->getListFull('tagcloud');
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
	
	function category($id)
	{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['list_slide']=$this->Mtintuc->getRowByColumn('slide','id','1');
			$data['category']  =  $this->Mtintuc->getListNewOfTag('tintuc_tags','id_tagv',$id);
			//var_dump(category); die();
			$data['items']=$this->Mtintuc->getListByColumn('tintuc','id',$id);
			// Lấy ra ds tin tức & sản phẩm ở footer
			$data['list_tintucft']=$this->Mtintuc->getListOffsetODB('tintuc',6,'id','DESC','duyet',1);
			$data['list_sanphamft']=$this->Mtintuc->getListFullODB('sanpham',6,'id','DESC');
			$data['list_tagv'] = $this->Mtintuc->getListFull('tagcloud');
			$data['lang']=$this->session->userdata("lang");
			//Lấy tin tức từ tag new 
			$data['list_news_tag'] = $this->Mtintuc->getListNewOfTag('tintuc_tags','id_tagv',$id);
			//	var_dump($data['list_news_tag']); die();
			$data['module']  =  $this->module;
			$data['page']  =  'vtintuctagv';
			$this->load->view('front/container',$data);
	}
}