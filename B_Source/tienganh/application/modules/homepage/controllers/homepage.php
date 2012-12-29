<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->addVisiting();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$data['counting']=$this->getCounting();
		$data['yt_fanpage']=$this->Mhomepage->getListFull('ta_vedio_fanpage');
		$data['list_video_home']=$this->Mhomepage->getListFull('ta_vedio_home');
		$data['list_dichvu']=$this->Mhomepage->getListFull('ta_dichvu');
		$data['list_courses'] = $this->Mhomepage->getListFull('ta_courses');
		$data['list_courses_cate'] = $this->Mhomepage->getListFull('ta_courses_cate');
		$data['category']  =  $this->Mhomepage->getListFullCategory('ta_courses');
		$data['list']=$this->Mhomepage->getListByColumn('ta_vedio', 'vedio_title', 0);
		$data['list_doitac']=$this->Mhomepage->getListFull('doitac');
		$data['list_tintuc']=$this->Mhomepage->getListOffset('ta_news',3,0);
		$data['list_khoahoc']=$this->Mhomepage->getListOffset('ta_courses',3,$index);
		$data['list_slide']=$this->Mhomepage->getListFull('slide');
		$data['list_slide1']=$this->Mhomepage->getListFull('slide1');
		$data['hotro_online']=$this->Mhomepage->getListFull('hotroonline');
		$data['title']='tienganh | Trang chủ';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array(
					'e_mail'=>$this->input->post('e_mail'));
		return $input;
	}
	
	//send mai share this page
	function send()
	{
		
		$this->form_validation->set_rules('e_mail','Địa chỉ mail','required|trim|valid_email');
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			$to = $input['e_mail'];
			$from="trungnt20290@gmail.com";
					$to=$_POST['e_mail'];
					$subject="Đăng ký nhận thông tin thành công";
					$message="Email của bạn đã đăng ký nhận tin tức và thông tin khóa học thành công.";
					$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
					mail($to,$subject,$message,$options);
			if ($this->Mhomepage->insertNewRow('email',$input))
			{
				$this->session->set_userdata('email_result','Gửi thành công !');
			}
			else $this->session->set_userdata('email_result','Gửi không thành công !');
		}
		$this->page();
	}
}