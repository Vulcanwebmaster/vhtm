<?php
class Sanpham extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->library('pagination');
		
		$this->load->model('Msanpham');
		$this->setLang();
		$this->loadLang();
		$this->addVisiting();
	}
	
	function _remap()
	{
		$arrayCategory = $this->Msanpham->DanhMuc();
		$arraySanPham = $this->Msanpham->DanhSachSanPham();
		if(($this->uri->segment(1)=="san-pham" || $this->uri->segment(1)=="sanpham") and $this->uri->segment(2)=="")
		{
			$this->index($index=0);
			return;
		}
		foreach($arrayCategory as $entry)
		{
			if($this->uri->segment(2) == $entry['alias'])
			{
				$this->category($entry['id'],$index=0);
			return;
			}
		}
		foreach ($arraySanPham as $entry)
		{	
			if($this->uri->segment(2)==$entry['alias'])
			{
				$this->detail($entry['id']);
				return;
			}
		}
	}
	function loadLang()
	{
		
		session_start();
        if(isset($_SESSION['lang'])) {
		   $lang=$_SESSION['lang'];
        } else {
        	$lang = 'vn';
		} 
		
        if ($lang=='vn') {
        	$_SESSION['lang']='vn';
			$this->lang->load('5sao','vietnamese');
			
		} else {
			$this->lang->load('5sao','english');
			$_SESSION['lang']='en';
		}
	}
	
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		
		//$data['list_spparentid']=$this->Msanpham->getSpByParentID('.$id.');
		
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_hotro']=$this->Msanpham->getListFull('hotro');
		$data['list_hotline']=$this->Msanpham->gethotline('hotro');
		
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		$data['current_breadcrum']=$this->lang->line('menu-sanpham');
		
		$config['base_url']=base_url().'sanpham/page/'.$index;
		$config['per_page']=9;
		$config['uri_segment']=4;
		$config['total_rows']=count($this->Msanpham->getListFull('sanpham'));
		$this->pagination->initialize($config);
		
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['title']='thaiduong | Sản phẩm';
		$data['list']=$this->Msanpham->getListOffset('sanpham',9,$index);

			
		$data['lang']=$this->session->userdata('lang');
		//echo $data['lang']; die();
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_hotro']=$this->Msanpham->getListFull('hotro');
		$data['list_hotline']=$this->Msanpham->gethotline('hotro');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['detail']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
		$data['lang']=$this->session->userdata('lang');
		$data['title']='thaiduong | Sản phẩm';		
		$data['module']=$this->module;
		if ($this->session->userdata('lang')=='vn')
			$data['current_breadcrum']=$data['detail']->ten_v;
		else $data['current_breadcrum']=$data['detail']->ten_e;
		
		$category_id=$data['detail']->danhmuc_id;
		$data['relates']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$category_id,0,6);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}
	
	function category($id=0, $index=0)
	{
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_hotro']=$this->Msanpham->getListFull('hotro');
		$data['list_hotline']=$this->Msanpham->gethotline('hotro');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$this->session->set_userdata('incategory','true');
		$data['current_category']= $this->Msanpham->getRowByColumn('danhmuc','id',$id);
		if ($this->session->userdata('lang')=='vn')
			$data['current_breadcrum']=$data['current_category']->ten_v;
		else $data['current_breadcrum']=$data['current_category']->ten_e;
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$config['base_url']=base_url().'sanpham/category/'.$index;
		$config['per_page']=9;
		$config['uri_segment']=4;
		$config['total_rows']=count($this->Msanpham->getListByColumn('sanpham','danhmuc_id',$id));
		$this->pagination->initialize($config);
		
		$data['title']='thaiduong | Sản phẩm';		
		//var_dump($this->Msanpham->getSp('sanpham'));die();
		
		if (!$this->Msanpham->isParent($id)){
			$data['list']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$id,$index,9);	
		}
		else{
			$data['list']=$this->Msanpham->getSpByParentID($id);
		}
		
		$data['lang']=$this->session->userdata('lang');
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
}