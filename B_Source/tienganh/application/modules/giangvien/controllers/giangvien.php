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
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mgiangvien->getListFull('ta_lecturers'));
			$this->pagination->initialize($config);
			$data['items']=$this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category',1);
			$data['title']='tienganh | Giảng viên';
			$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
			$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
			$data['list_slide']=$this->Mgiangvien->getListFull('slide');
			$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
			$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
			$data['category']  =  $this->Mgiangvien->getListFullCategory('ta_courses');
			$data['items']=$this->Mgiangvien->getListOffset('ta_lecturers',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgiangvien';
			$this->load->view('front/container',$data);
		}
	
		function trogiang($index=0)
		{
				$config['base_url'] = base_url().'giangvien/trogiang';
				$config['per_page'] = 10;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Trợ giảng'));
				$this->pagination->initialize($config);
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['list_slide']=$this->Mgiangvien->getListFull('slide');
				$data['category']  =  $this->Mgiangvien->getListFullCategory('ta_courses');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Trợ giảng',$index,10);
				$data['module']=$this->module;
				$data['index'] = 0;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
		
		function thaygiao($index=0)
		{
				$config['base_url'] = base_url().'giangvien/thaygiao';
				$config['per_page'] = 10;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Thầy giáo'));
				$this->pagination->initialize($config);
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_slide']=$this->Mgiangvien->getListFull('slide');
				$data['category']  =  $this->Mgiangvien->getListFullCategory('ta_courses');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Thầy giáo',$index,10);
				$data['module']=$this->module;
				$data['index'] = 1;
				$data['page']='vgiangvien';
				$this->load->view('front/container',$data);	
		}
	
		function cogiao($index=0)
		{
				echo $index;
				$config['base_url'] = base_url().'giangvien/cogiao';
				$config['per_page'] = 10;
				$config['total_rows']=count($this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category','Cô giáo'));
				$this->pagination->initialize($config);
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_slide']=$this->Mgiangvien->getListFull('slide');
				$data['category']  =  $this->Mgiangvien->getListFullCategory('ta_courses');
				$data['items']=$this->Mgiangvien->getListByColumnOffsetsp('ta_lecturers','lecturers_category','Cô giáo',$index,10);
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
			$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
			$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
			$data['list_slide']=$this->Mgiangvien->getListFull('slide');
			$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
			$data['category']  =  $this->Mgiangvien->getListFullCategory('ta_courses');
			$data['chitiet']=$this->Mgiangvien->getRowByColumn('ta_lecturers','lecturers_id',$id);
			$model=new CI_Model();
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vdetail';
			$this->load->view('front/container',$data);
		}
		
		function _input()
			{
				$input=array('lecturers_category'=>$this->input->post('lecturers_category'),
							'contact_name'=>$this->input->post('contact_name'),
							'contact_phone'=>$this->input->post('contact_phone'),
							'contact_content'=>$this->input->post('contact_content'),
							'contact_email'=>date('Y-m-d',time()+7*3600));
							//var_dump($input);
							//die();
				return $input;
			}
			
						
	function send()
		{
			$this->form_validation->set_rules('contact_name','Tên','required|trim');
			$this->form_validation->set_rules('contact_email','Địa chỉ mail','required|trim|valid_email');
			$this->form_validation->set_rules('contact_phone','Số mobile','required|trim|numeric');
			//chu y
			if ($this->form_validation->run())
			{
				
				$input=$this->_input();
				if ($this->Mlienhe->insertNewRow('ta_contact_us',$input))
				{
					$this->session->set_userdata('lienhe_result','Gửi thành công !');
				}
				else $this->session->set_userdata('lienhe_result','Gửi không thành công !');
			}
			
			$this->index();
		}
}