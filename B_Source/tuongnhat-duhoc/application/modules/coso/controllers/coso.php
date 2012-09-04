<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coso extends NIW_controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mcoso');
	}
	
	function index()
	{
		$data['coso']=$this->Mcoso->getCoso(0);
		$data['giangday']=$this->Mcoso->getCoSo(1);
		$data['title']='Cơ sở';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vcoso.php';
		$this->load->view('front/container',$data);
	}
	
	function giangday()
	{
		$data['coso']=$this->Mcoso->getCoso(0);
		$data['giangday']=$this->Mcoso->getCoSo(1);
		$data['title']='Giảng dạy/Giáo viên ';
		$data['module'] = $this->module;
		$data['page'] = 'shop/vgiangday.php';
		$this->load->view('front/container',$data);
	}
}
?>