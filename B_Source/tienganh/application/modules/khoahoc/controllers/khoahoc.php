<?php
/**
 * 
 * This class is controller of Courses in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Khoahoc extends NIW_Controller
{
	private $data = array();
	function __construct()
	{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->helper('text');
			$this->load->model('Mkhoahoc');
			$this->module	=	strtolower(get_class());
	}
	
	function index($index=0)
	{
			$config['base_url']  =  base_url().'khoahoc/page';
			$config['per_page']  =  10;
			$config['total_rows']  =  count($this->Mkhoahoc->getListFull('ta_courses'));
			$this->pagination->initialize($config);
			$data['title']='tienganh | Khóa học';
			$data['list_dichvu']=$this->Mkhoahoc->getListFull('ta_dichvu');
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_courses'] = $this->Mkhoahoc->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mkhoahoc->getListFull('ta_courses_cate');
			$data['category']  =  $this->Mkhoahoc->getListCategory('ta_courses_cate');
			$data['list_doitac']  =  $this->Mkhoahoc->getListFull('doitac');
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_slide']=$this->Mkhoahoc->getListFull('slide');
			$data['list_slide1']=$this->Mkhoahoc->getListFull('slide1');
			$data['items']  =  $this->Mkhoahoc->getListOffset('ta_courses',10,$index);
			$data['module']  =  $this->module;
			$data['index'] = -1;
			$data['page']  =  'vkhoahoc';
			$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
			$data['list_dichvu']=$this->Mkhoahoc->getListFull('ta_dichvu');
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_courses'] = $this->Mkhoahoc->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mkhoahoc->getListFull('ta_courses_cate');
			$data['category']  =  $this->Mkhoahoc->getListFullCategory('ta_courses');
			$data['list_doitac']  =  $this->Mkhoahoc->getListFull('doitac');
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_slide']=$this->Mkhoahoc->getListFull('slide');
			$data['list_slide1']=$this->Mkhoahoc->getListFull('slide1');
			$data['list_chitiet']  =  $this->Mkhoahoc->getRowByColumn('ta_courses','courses_id',$index);
			$data['items']  =  $this->Mkhoahoc->getListOffset('ta_courses',10,$index);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
	}
	
	function category($id)
	{
			$data['list_dichvu']=$this->Mkhoahoc->getListFull('ta_dichvu');
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_courses'] = $this->Mkhoahoc->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mkhoahoc->getListFull('ta_courses_cate');
			$data['list_doitac']  =  $this->Mkhoahoc->getListFull('doitac');
			$data['hotro_online']=$this->Mkhoahoc->getListFull('hotroonline');
			$data['list_slide']=$this->Mkhoahoc->getListFull('slide');
			$data['list_slide1']=$this->Mkhoahoc->getListFull('slide1');
			$data['category']  =  $this->Mkhoahoc->getListCategory('ta_courses_cate');
			//var_dump($data['category']); die();
			$data['items']=$this->Mkhoahoc->getListByColumn('ta_courses','courses_category',$id);
			//var_dump($data['items']); die();
			$data['module']  =  $this->module;
			$data['page']  =  'vkhoahoc';
			$this->load->view('front/container',$data);
	}
}