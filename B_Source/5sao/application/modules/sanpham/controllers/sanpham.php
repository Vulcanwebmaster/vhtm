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
		if($this->uri->segment(1)=="san-pham" and $this->uri->segment(2)=="")
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
		$lang=$this->session->userdata('lang');
		if ($lang=='vn')
		{
			$this->lang->load('5sao','vietnamese');
		}
		else $this->lang->load('5sao','english');
	}
	
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$config['base_url']=base_url().'sanpham/page/'.$index;
		$config['per_page']=9;
		$config['uri_segment']=4;
		$config['total_rows']=count($this->Msanpham->getListFull('sanpham'));
		$this->pagination->initialize($config);
		
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['title']='5saoviet | Sản phẩm';
		$data['list']=$this->Msanpham->getListOffset('sanpham',9,$index);
		$data['lang']=$this->session->userdata('lang');
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['detail']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
		$data['lang']=$this->session->userdata('lang');
		$data['title']='5saoviet | Sản phẩm';		
		$data['module']=$this->module;
		
		$category_id=$data['detail']->danhmuc_id;
		$data['relates']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$category_id,0,6);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}
	
	function category($id=0, $index=0)
	{
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$this->session->set_userdata('incategory','true');
		$data['current_category']= $this->Msanpham->getRowByColumn('danhmuc','id',$id);
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$config['base_url']=base_url().'sanpham/category/'.$index;
		$config['per_page']=9;
		$config['uri_segment']=4;
		$config['total_rows']=count($this->Msanpham->getListByColumn('sanpham','danhmuc_id',$id));
		$this->pagination->initialize($config);
		
		$data['title']='5saoviet | Sản phẩm';		
		$data['list']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$id,$index,9);
		$data['lang']=$this->session->userdata('lang');
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
}