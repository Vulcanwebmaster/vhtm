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
	
	public function page($index=0)
	{
		$config['base_url']=base_url().'sanpham/page/';
		$config['per_page']= 9;
		$config['total_rows']=count($this->Msanpham->getListByColumn('sanpham','moi','1'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_slide']=$this->Msanpham->getListFull('slide');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_hotro']=$this->Msanpham->getListFull('hotro');
		$data['list_hotline']=$this->Msanpham->gethotline('hotro');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_tintuc']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$data['lang']=$this->session->userdata('lang');
		$data['list']=$this->Msanpham->getListByColumnOffset('sanpham','moi','1',$index,9);
		$data['title']='thaiduong | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'vsanpham';
		$this->load->view('front/container',$data);
	}
	
	function detail($alias)
	{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$category_id = $temp[0];
				$id = $temp[1];
			}	
		
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
		if ($_SESSION['lang']=="vn") 
			$data['current_breadcrum']=$data['detail']->ten_v;
		else $data['current_breadcrum']=$data['detail']->ten_e;
		
		$category_id=$data['detail']->danhmuc_id;
		$data['relates']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$category_id,0,6);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
	}

	function category($alias, $index=0)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				$id = $temp[0];
				//$index = $temp[1];
			}	
			$offset=500;
		$data['list_spbanchay']=$this->Msanpham->getListByColumn('sanpham','banchay','1');
		$data['list_thuvienanh']=$this->Msanpham->getListFull('thuvienanh');
		$data['list_hotro']=$this->Msanpham->getListFull('hotro');
		$data['list_hotline']=$this->Msanpham->gethotline('hotro');
		$data['list_doitac']=$this->Msanpham->getListFull('doitac');
		$data['list_slide']=$this->Msanpham->getListFull('slide');
		$this->session->set_userdata('incategory','true');
		$data['current_category']= $this->Msanpham->getRowByColumn('danhmuc','id',$id);
		if ($_SESSION['lang']=="vn")
			$data['current_breadcrum']=$data['current_category']->ten_v;
		else $data['current_breadcrum']=$data['current_category']->ten_e;
		$data['list_tintuc_right']=$this->Msanpham->getListOffset('tintuc',15,0);
		$data['list_gioithieumenu']=$this->Msanpham->getListFull('gioithieu');
		$data['categories']=$this->Msanpham->getListByColumn('danhmuc','parent_id','0');
		$data['counting']=$this->getCounting();
		
		$config['base_url']=base_url().'sanpham/category/'.$id;
		$config['per_page']=9;
		$config['uri_segment']=4;
		if (!$this->Msanpham->isParent($id)){
			$config['total_rows']=count($this->Msanpham->getListByColumn('sanpham','danhmuc_id',$id));
			}
		else{
			$config['total_rows']=count($this->Msanpham->getSpByParentID($id));
			
			}
		//var_dump($config['total_rows']); die();
		$this->pagination->initialize($config);
		
		$data['title']='thaiduong | Sản phẩm';		
		if (!$this->Msanpham->isParent($id)){
			$data['list']=$this->Msanpham->getListByColumnOffset('sanpham','danhmuc_id',$id,$index,9);	
		}
		else{
			$data['list']=$this->Msanpham->getSpByParentIDOffset($id,$index,9);
		}
		
		$data['lang']=$this->session->userdata('lang');
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}
}