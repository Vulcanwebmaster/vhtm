<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khoahoc extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mkhoahoc');
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
	}
	
	function daihoc()
	{
		$data['title']='Khóa học - Đại học';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vdaihoc.php';
		$this->load->view('front/container',$data);
	}
	function saudaihoc()
	{
		$data['title']='Khóa học - Sau đại học';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vsaudaihoc.php';
		$this->load->view('front/container',$data);
	}
	function nghiepvu()
	{
		$data['title']='Khóa học - Nghiệp Vụ';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vnghiepvu.php';
		$this->load->view('front/container',$data);
	}
	function banthoigian()
	{
		$data['title']='Khóa học - Bán thời gian';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vbanthoigian.php';
		$this->load->view('front/container',$data);
	}
	function khac()
	{
		$data['title']='Khóa học - Khác';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vkhac.php';
		$this->load->view('front/container',$data);
	}
}
?>