<?php
	class Sanpham extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->helper('url');
			$this->load->model('Msanpham');
			$this->load->library('session');
			$this->load->helper('text');
		}

		function index($index=0)
		{
				$config['base_url'] = base_url().'sanpham/index';
				$config['per_page'] = 4;
				$config['total_rows'] = count($this->Msanpham->getListFull('xh_product'));
				$this->pagination->initialize($config);
				
				//phai limit de lay so trang can phan
				$data['items'] = $this->Msanpham->getListOffset('xh_product',4,$index);
				$data['module'] = $this->module;
				$data['page'] ='vsanpham';
				$this->load->view('front/container',$data);	
		}

		
		function chevrolet($index=0)
		{
				
				$config['base_url']=base_url().'sanpham/chevrolet/';
				$config['per_page']= 4;
				$config['total_rows']=count($this->Msanpham->getListByColumn('xh_product','hangsx','Chevrolet'));
				//var_dump($config['total_rows']);die();
				$this->pagination->initialize($config);
				
				$data['items']=$this->Msanpham->getListByColumnOffsetsp('xh_product','hangsx','Chevrolet',$index,4);
				//var_dump($data['items']);die();	
				$data['module']=$this->module;
				$data['page']='vsanpham';
				$this->load->view('front/container',$data);	
		}
		
		function hyundai($index=0)
		{
				
				$config['base_url']=base_url().'sanpham/hyundai/';
				$config['per_page']= 4;
				$config['total_rows']=count($this->Msanpham->getListByColumn('xh_product','hangsx','Hyundai'));
				//var_dump($config['total_rows']);die();
				$this->pagination->initialize($config);
				
				$data['items']=$this->Msanpham->getListByColumnOffsetsp('xh_product','hangsx','Hyundai',$index,4);
				//var_dump($data['items']);die();	
				$data['module']=$this->module;
				$data['page']='vsanpham';
				$this->load->view('front/container',$data);	
		}
		
		
		function chitiet($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$product_id = $temp[0];
			}
			$data['list_tuvan']=$this->Msanpham->getListFull('tuvansanpham');
			//$data['category']=$this->Msanpham->getRowByColumn('xh_category','id',$category_id);
			//$data['product']=$this->Msanpham->getRowByColumn('xh_product','id',$product_id);
			//$data['parents']=$this->Msanpham->getListByColumn('xh_category','parent_id',0);
			//$data['list_lienhe']=$this->Msanpham->getListFull('mc_contact_us');
			//$data['list_hotro']=$this->Msanpham->getListFull('hotro');
			//$data['list_doitac']=$this->Msanpham->getListFull('doitac');	
			//$data['detail']=$this->Msanpham->getRowByColumn('xh_product','id',$product_id);
			
			$model=new CI_Model();
			
			$data['module']=$this->module;
			// Lấy dl từ $data['detail'] (dòng trên)
			//$category_id1=$data['detail']->category_id;
			//var_dump($data['detail']->category_id);die();
			//$data['relates']=$this->Msanpham->getListByColumnOffset('xh_product','category_id',$category_id1,0,6);
			
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
	
	}
