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
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		
		$data['list']=$this->Mhomepage->getListByColumn('ta_vedio', 'vedio_title', 0);
		$data['list_doitac']=$this->Mhomepage->getListFull('doitac');
		$data['list_tintuc']=$this->Mhomepage->getListOffset('ta_news',3,0);
		$data['list_khoahoc']=$this->Mhomepage->getListOffset('ta_courses',3,$index);
		$data['list_slide']=$this->Mhomepage->getListFull('slide');
		$data['hotro']=$this->Mhomepage->getListFull('hotroonline');
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
	
	function send()
	{
		$this->form_validation->set_rules('e_mail','Địa chỉ mail','required|trim|valid_email');
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			$to = $input['e_mail'];
			/*if (isset($_POST['send']))
					{
					$from="trungnt20290@gmail.com";
					$to=$_POST['e_mail'];
					$subject="Đăng ký nhận thông tin thành công";
					$message="Email của bạn đã đăng ký nhận tin tức và thông tin khóa học thành công.";
					$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
					mail($to,$subject,$message,$options);
					echo"Ðã gửi mail";
					}*/
			//var_dump($to); die();
			//mail($to,$subject,$message);
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
	
	function mail()
	{
		//$to = "someone@example.com";
		$subject = "Test mail";
		$message = "Hello! This is a simple email message.";
		$from = "trungnt20290@gmail.com";
		//$headers = "From:" . $from;
		//mail($to,$subject,$message,$headers);
		//echo "Mail Sent.";
	}
}