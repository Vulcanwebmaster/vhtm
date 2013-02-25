<?php
class Danhmuc extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mdanhmuc');
			$this->load->library('session');
			$this->load->helper('text');
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			$data['online']  =  $this->Mdanhmuc->CountOnline('fg_tag','status',1);
			$config['base_url'] = base_url().'danhmuc/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mdanhmuc->getListFull('fg_category'));
			$this->pagination->initialize($config);
			$data['items'] = $this->Mdanhmuc->getListOffset('fg_category',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vdanhmuc';
			$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
			$data['online']  =  $this->Mdanhmuc->CountOnline('fg_tag','status',1);
			$data['list_courses'] = $this->Mdanhmuc->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mdanhmuc->getListFull('ta_courses_cate');
			$data['category']  =  $this->Mdanhmuc->getListFullCategory('ta_courses');
			$data['list_chitiet']  =  $this->Mdanhmuc->getRowByColumn('ta_courses','courses_id',$index);
			$data['items']  =  $this->Mdanhmuc->getListOffset('ta_courses',10,$index);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
	}
	function category($id)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['online']  =  $this->Mdanhmuc->CountOnline('fg_tag','status',1);
			$data['list_games'] = $this->Mdanhmuc->getListFull('fg_games');
			$data['list_category'] = $this->Mdanhmuc->getListFull('fg_category');
			$data['category']  =  $this->Mdanhmuc->getListCategory('fg_category');
			//var_dump($data['category']); die();
			$data['items']=$this->Mdanhmuc->getListByColumn('fg_games','category_id',$id);
			//var_dump($data['items']); die();
			$data['module']  =  $this->module;
			$data['page']  =  'vgames';
			$this->load->view('front/container',$data);
	}
}