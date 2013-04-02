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
		$this->loadLang();
		$this->load->helper('text');
		}
		function index()
		{
			$this->page();
		}
	
		function page($index=0)
		{
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['list_belote'] = $this->Mhelps->getListFull('fg_belote');
			$data['step']  =  $this->Mhelps->getListFull('fg_step');
			$data['topwin']  =  $this->Mhelps->Topwin(4);
			$data['topgiaidau']  =  $this->Mhelps->Topgiaidau(4);
			$config['base_url'] = base_url().'helps/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mhelps->getListFull('fg_helps'));
			$this->pagination->initialize($config);
			$data['title']='games | Flash-games';
			$helps = $this->Mhelps->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $helps->meta_help;
			$data['list_hotro'] = $this->Mhelps->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mhelps->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mhelps->getListFull('fg_slide');
			$data['list_banner'] = $this->Mhelps->getListFull('fg_banner');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vhelps';
			$this->load->view('front/container',$data);
		}
		
		function faqs($id)
		{
			$data['list_belote'] = $this->Mhelps->getListFull('fg_belote');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$helps = $this->Mhelps->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $helps->meta_help;
			$data['step']  =  $this->Mhelps->getListFull('fg_step');
			$data['list_hotro'] = $this->Mhelps->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mhelps->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mhelps->getListFull('fg_slide');
			$data['list_banner'] = $this->Mhelps->getListFull('fg_banner');
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
			$data['page']  =  'vfaqs';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		function belote($id)
		{
			$data['list_belote'] = $this->Mhelps->getListFull('fg_belote');
			$data['step']  =  $this->Mhelps->getListFull('fg_step');
			$helps = $this->Mhelps->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $helps->meta_help;
			$data['list_hotro'] = $this->Mhelps->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mhelps->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mhelps->getListFull('fg_slide');
			$data['list_banner'] = $this->Mhelps->getListFull('fg_banner');
			$data['description'] = $this->Mhelps->getRowByColumn('fg_belote','id',1);
			$data['content1'] = $this->Mhelps->getRowByColumn('fg_belote','id',1);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_general_detail'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vrules';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}

		function general($id)
		{
			$data['list_belote'] = $this->Mhelps->getListFull('fg_belote');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			//var_dump($data['list_help']); die();
			$data['step']  =  $this->Mhelps->getListFull('fg_step');
			
			$helps = $this->Mhelps->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $helps->meta_help;
			
			$data['list_hotro'] = $this->Mhelps->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mhelps->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mhelps->getListFull('fg_slide');
			$data['list_banner'] = $this->Mhelps->getListFull('fg_banner');
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_general_detail'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
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

		function technical($id)
		{
			$data['list_belote'] = $this->Mhelps->getListFull('fg_belote');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['step']  =  $this->Mhelps->getListFull('fg_step');
			$helps = $this->Mhelps->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $helps->meta_help;
			$data['list_hotro'] = $this->Mhelps->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mhelps->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mhelps->getListFull('fg_slide');
			$data['list_banner'] = $this->Mhelps->getListFull('fg_banner');
			$data['introducts'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['overview'] = $this->Mhelps->getRowByColumn('fg_games','game_id',$id);
			$data['list_games'] = $this->Mhelps->getListFull('fg_games');
			$data['list_chitiet']  =  $this->Mhelps->getRowByColumn('fg_faqs','id',$id);
			$data['list_technical'] = $this->Mhelps->getListFull('fg_technical');
			$data['list_technical_detail'] = $this->Mhelps->getRowByColumn('fg_technical','id',$id);
			$data['list_general_detail'] = $this->Mhelps->getRowByColumn('fg_general','id',$id);
			$data['list_general'] = $this->Mhelps->getListFull('fg_general');
			$data['list_category'] = $this->Mhelps->getListFull('fg_category');
			$data['list_faq'] = $this->Mhelps->getListFull('fg_faqs');
			$data['list_help'] = $this->Mhelps->getListFull('fg_helps');
			$data['items']=$this->Mhelps->getListOffset('fg_helps',10,$id);
			$model=new CI_Model();
			$data['module']  =  $this->module;
			$data['page']  =  'vtechnical';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}

		
}