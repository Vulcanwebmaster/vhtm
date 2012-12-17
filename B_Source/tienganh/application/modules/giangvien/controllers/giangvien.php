<?php
class Giangvien extends NIW_Controller
{
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Mgiangvien');
		$this->load->library('session');
		$this->load->helper('text');
		}
		function index()
		{
		$this->page();
		}
	
		function page($index=0)
		{
			$config['base_url'] = base_url().'giangvien/page';
			$config['per_page'] = 2;
			$config['total_rows'] = count($this->Mgiangvien->getListFull('ta_lecturers'));
			$this->pagination->initialize($config);
			$data['categories']=$this->Mgiangvien->getListByColumn('ta_category','parent_id','0');
			$data['items']=$this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category',1);
			$data['title']='tienganh | Giảng viên';
			$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
			$data['items']=$this->Mgiangvien->getListOffset('ta_lecturers',2,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgiangvien';
			$this->load->view('front/container',$data);
		}
	
		function trogiang($index=0)
		{
				$config['base_url'] = base_url().'giangvien/trogiang';
				$config['per_page'] = 2;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Trợ giảng'));
				$this->pagination->initialize($config);
				
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Trợ giảng',$index,2);
				$data['module']=$this->module;
				$data['index'] = 0;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
		
		function thaygiao($index=0)
		{
				$config['base_url'] = base_url().'giangvien/thaygiao';
				$config['per_page'] = 3;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Thầy giáo'));
				$this->pagination->initialize($config);
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Thầy giáo',$index,3);
				$data['module']=$this->module;
				$data['index'] = 1;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
	
		function cogiao($index=0)
		{
				echo $index;
				$config['base_url'] = base_url().'giangvien/cogiao';
				$config['per_page'] = 3;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Cô giáo'));
				$this->pagination->initialize($config);
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Cô giáo',$index,3);
				$data['module']=$this->module;
				$data['index'] = 2;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
	
		function detail($alias)
		{
			// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $alias);
			if (isset($temp)){
				//$category_id = $temp[0];
				$id = $temp[0];
			}
			$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
			$data['chitiet']=$this->Mgiangvien->getRowByColumn('ta_lecturers','lecturers_id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
}