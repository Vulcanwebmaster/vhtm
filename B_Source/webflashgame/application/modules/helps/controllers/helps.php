<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Helps extends NIW_Controller
{
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Mhelps');
		$this->load->library('session');
		$this->load->helper('text');
		}
		function index()
		{
			$this->page();
		}
	
		function page($index=0)
		{
			$config['base_url'] = base_url().'helps/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mhelps->getListFull('fg_helps'));
			$this->pagination->initialize($config);
			$data['title']='games | Flash-games';
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vhelps';
			$this->load->view('front/container',$data);
		}
		
		function detail($id)
		{
			//$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
}