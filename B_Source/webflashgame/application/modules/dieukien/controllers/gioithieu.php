<?php
class Gioithieu extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgioithieu');
			$this->load->library('session');
			$this->load->helper('text');
	}
	
	function index()
	{
			$this->page();
	}
	
	 
	function page($index=0)
	{
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_gioithieu'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
	}
	
	function dieukien($index=0)
	{
			$data['list_category'] = $this->Mgioithieu->getListFull('fg_category');
			$data['list_gioithieu'] = $this->Mgioithieu->getListFull('fg_about_us');
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgioithieu';
			$this->load->view('front/container',$data);
	}
	
}