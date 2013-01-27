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
		$this->loadLang();
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
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			//var_dump($data['list_general']); die();
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vhelps';
			$this->load->view('front/container',$data);
		}
		
		function detail($id)
		{
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			//$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vdetail';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		function rules($id){
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			//$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vrules';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}

		function general($id){
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general1'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			//$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vgeneral';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}

		function technical($id){
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_technical1'] = $this->Mhelps->getRowByColumn('fg_technical','id',$id);
			$data['list_general1'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			//$data['list_chitiet']  =  $this->Mgames->getRowByColumn('fg_games','id',$index);
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vgeneral';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}

		
}