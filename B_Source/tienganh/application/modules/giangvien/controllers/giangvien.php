
<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
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
			$data['list_dichvu']=$this->Mgiangvien->getListFull('ta_dichvu');
			$data['items']=$this->Mgiangvien->getListByColumn('ta_lecturers','lecturers_category',1);
			$data['title']='tienganh | Giảng viên';
			$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
			$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
			$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
			$data['list_quangcao']=$this->Mgiangvien->getListFull('quangcao');
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
				$data['list_dichvu']=$this->Mgiangvien->getListFull('ta_dichvu');
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['list_quangcao']=$this->Mgiangvien->getListFull('quangcao');
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
				$data['list_dichvu']=$this->Mgiangvien->getListFull('ta_dichvu');
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_quangcao']=$this->Mgiangvien->getListFull('quangcao');
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
				$data['list_dichvu']=$this->Mgiangvien->getListFull('ta_dichvu');
				$data['list_courses'] = $this->Mgiangvien->getListFull('ta_courses');
				$data['list_courses_cate'] = $this->Mgiangvien->getListFull('ta_courses_cate');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
				$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
				$data['list_quangcao']=$this->Mgiangvien->getListFull('quangcao');
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
			$data['list_dichvu']=$this->Mgiangvien->getListFull('ta_dichvu');
			$data['hotro_online']=$this->Mgiangvien->getListFull('hotroonline');
			$data['list_doitac']=$this->Mgiangvien->getListFull('doitac');
			$data['list_quangcao']=$this->Mgiangvien->getListFull('quangcao');
			$data['list_slide']=$this->Mgiangvien->getListFull('slide');
			$data['list_slide1']=$this->Mgiangvien->getListFull('slide1');
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
				$input=array('name1'=>$this->input->post('name1'),
							'email1'=>$this->input->post('email1'),
							'name2'=>$this->input->post('name2'),
							'email2'=>$this->input->post('email2'),
							'mesage_content'=>date('Y-m-d',time()+7*3600));
				return $input;
			}
			
	// function popup send mail				
	function send()
		{
				$input=$this->_input();
							
				if ($input==TRUE)
				{
					$to = $input['email2'];
					$from="tuyetapt@gmail.com";
					$subject="Mot nguoi ban da gui....";
					$message='Xin chao: '.$input['name2'].'<br>';
					$message.='Mot nguoi ban co ten la: '.$input['name1'].'<br>';
					$message.='Co dia chi email: '.$input['email1'];
					$message.=$input['mesage_content'];
					$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
					mail($to,$subject,$message,$options);
					}
			
			$this->index();
		}
	
	
}