<?php
	class Sanpham extends NIW_Controller
	{	
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
		} 
		
		function index()
		{
			$data['list']=$this->Msanpham->getListFull('n_t_sanpham');
			$data['sanphammenu']=$this->Msanpham->getListByColumn('n_t_danhmuc','menu','sản phẩm');
			$data['phukienmenu']=$this->Msanpham->getListByColumn('n_t_danhmuc','menu','phụ kiện');
			$data['title']='Sản phẩm';
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function danhmuc($danhmuc_id)
		{
			$cate=$this->Msanpham->getRowByColumn('n_t_danhmuc','id',$danhmuc_id);
			
			$data['list']=$this->Msanpham->getListByColumn('n_t_sanpham','danhmuc_id',$danhmuc_id);
			$data['title']=$cate->ten;
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function sanphammoi()
		{
			$data['list']=$this->Msanpham->getListByColumn('n_t_sanpham','moi','1');
			$data['title']='Sản phẩm mới';
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function chitiet($id)
		{
			$item=$this->Msanpham->getRowByColumn('n_t_sanpham','id',$id);
			$this->Msanpham->increaseView($id);
			$data['info']=$item;
			$data['title']='Sản phẩm mới';
			$data['module']=$this->module;
			$data['page']='vchitiet';
			$this->load->view('front/container',$data);
		}
		
		function spyeuthich()
		{
			$data['list']=$this->Msanpham->getListOrderByColumn('n_t_sanpham','xem','desc',10);
			$data['title']='Sản phẩm yêu thích';
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
		
		function spnoibat()
		{
			$data['list']=$this->Msanpham->getListByColumn('n_t_sanpham','noibat','1');
			$data['title']='Sản phẩm nổi bật - cá tính';
			$data['module']=$this->module;
			$data['page']='vsanpham';
			$this->load->view('front/container',$data);
		}
	}	
?>