<?php
class Belote extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mbelote');
		$this->loadLang();
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->loadLang();
	}
	
	function index()
	{
		$this->page();
	}
	
	// function page($index=0)
	// {
		// $config['base_url']=base_url().'belote/page/';
		// $config['per_page']=8;
		// $config['total_rows']=count($this->Mbelote->getListFull('fg_belote'));
		// $config['uri_segment']=3;
		// $this->pagination->initialize($config);
		// $data['list_news']=$this->Mbelote->getListOffset('fg_belote',8,$index);
		// $data['module']=$this->module;
		// $data['page']='vnews';
		// $this->load->view('front/container',$data);
	// }
// 	
	function detail($id=0)
	{
	//Số người đăng ký chơi game
		$data['register']  =  $this->Mbelote->CountRegister('fg_accounts');
		$data['online']  =  $this->Mbelote->CountOnline('fg_tag','status',1);
		$data['step']  =  $this->Mbelote->getListFull('fg_step');
		$data['photo'] = $this->Mbelote->getListFull('fg_banner');
		$data['link_fanpage'] = $this->Mbelote->getRowByColumn('fg_setting','id',1);
		$data['list_belote'] = $this->Mbelote->getListFull('fg_belote');
		$data['link_fanpage'] = $this->Mbelote->getRowByColumn('fg_setting','id',1);
		$data['topwin']  =  $this->Mbelote->Topwin(4);
		$data['topgiaidau']  =  $this->Mbelote->Topgiaidau(4);
		//$data['list_comment'] = $this->Mbelote->getListByColumn('st_comment','news_id',$id);
		$data['detail']=$this->Mbelote->getRowByColumn('fg_belote','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
	
}