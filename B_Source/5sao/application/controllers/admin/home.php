<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Admin_Controller {
	
	private $model;
	function __construct()
	{
		parent::__construct();
		$this->load->library('editor_library');
		
		$this->model=new CI_Model();
	}
	
	public function index()
	{
		$data["title"] = "Dash Broad";
		$data['page'] = "admin/home";
		//Breadcrumb data
		$data['bcCurrent'] = "Dash Broad";
		$data['counting']=$this->counting();
		
		$today=date('Y/m/d',time()+7*3600);
		$data['today']=$this->model->getRowByColumn('thongke','ngaythang',$today);
		$this->load->view("admin/container",$data);
	}
	
	function counting()
	{
		$list=$this->model->getListFull('thongke');
		$result= '';
		$count=0;
		foreach ($list as $item)
		{
			if ($count==0)
				$result=$result.$item->soluong;
			else $result=$result.','.$item->soluong;
			$count++;
		}
		return $result;
	}
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */