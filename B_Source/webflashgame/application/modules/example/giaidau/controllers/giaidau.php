<?php
class Giaidau extends NIW_Controller
{
	function __construct()
	{
			@session_start();
			parent::__construct();
			$this->module=basename(dirname(dirname(__FILE__)));
			$this->module = strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mgiaidau');
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
			$config['base_url']=base_url().'homepage/page/';
			$config['per_page']= 9;
			$config['total_rows']=count($this->Mgiaidau->getListByColumn('fg_tournaments','tour_id','1'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			$giaidau = $this->Mgiaidau->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $giaidau->meta_tourmanents;
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['link_fanpage'] = $this->Mgiaidau->getRowByColumn('fg_setting','id',1);
			$data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			$data['past'] = $this->Mgiaidau->gamePast();
			$data['nextweek'] = $this->Mgiaidau->gameNextWeek();
			$data['week'] = $this->Mgiaidau->gameWeek($index);
			$data['step']  =  $this->Mgiaidau->getListFull('fg_step');
			$data['today'] = $this->Mgiaidau->gameToday();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',1,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vgiaidau';
			$this->load->view('front/container',$data);
	}
	
	function past($index=0)
	{
			$giaidau = $this->Mgiaidau->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $giaidau->meta_tourmanents;
			$data['step']  =  $this->Mgiaidau->getListFull('fg_step');
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['link_fanpage'] = $this->Mgiaidau->getRowByColumn('fg_setting','id',1);
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['past'] = $this->Mgiaidau->gamePast();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vpast';
			$this->load->view('front/container',$data);
	}
	
	function _input2()
	{	
			$input = array('account_id'=>$this->input->post('dkthamgiagiaidau'),
							'tour_id'=>$this->input->post('tour_id'),
			);
		//	var_dump($input); die();
		return $input;
	}
		
	function register()
	{
		//if($this->Mgiaidau->check2($_SESSION['front_user_id'])==TRUE){
			$input=$this->_input2();
			$this->Mgiaidau->insertNewRow('fg_list_player',$input);
			redirect(base_url(),'refresh');
		//}else{
			//redirect(base_url(),'refresh');
			//echo 'not oke'; die();
		//}
			
	}
	
	function mytournament(){
			$giaidau = $this->Mgiaidau->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $giaidau->meta_tourmanents;
			$data['step']  =  $this->Mgiaidau->getListFull('fg_step');
			$data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			$data['link_fanpage'] = $this->Mgiaidau->getRowByColumn('fg_setting','id',1);
			$data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			$data['list_banner'] = $this->Mgiaidau->getListFull('fg_banner');
			$data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			$data['past'] = $this->Mgiaidau->gamePast();
			$data['items'] = $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vmytuornament';
			$this->load->view('front/container',$data);
	}
	
	function detail($index=0)
	{
			$giaidau = $this->Mgiaidau->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $giaidau->meta_tourmanents;
			// $data['avarta'] = $this->Mgiaidau->getListCategory('fg_tournaments','tour_id',$index);
			$data['step']  =  $this->Mgiaidau->getListFull('fg_step');
			 $data['available'] = $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $available=$data['available']->players;
			 $data['player'] = $this->Mgiaidau->CountPlayer('fg_list_player','tour_id',$index);
			 $data['list_giaidau'] = $this->Mgiaidau->getListFull('fg_tournaments');
			 $data['list_hotro'] = $this->Mgiaidau->getListFull('fg_hotro');
			 $data['list_bannerheader'] = $this->Mgiaidau->getListFull('fg_bannerheader');
			 $data['list_slide'] = $this->Mgiaidau->getListFull('fg_slide');
			 $data['link_fanpage'] = $this->Mgiaidau->getRowByColumn('fg_setting','id',1);
			 $data['setting_detail'] = $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $data['list_category'] = $this->Mgiaidau->getListFull('fg_category');
			 $data['list_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $data['setting_chitiet']  =  $this->Mgiaidau->getRowByColumn('fg_setting','id',1);
			 $data['checkStatus']  =  $this->Mgiaidau->check('id',$index);
			 $data['listPlayer'] = $this->Mgiaidau->CountPlayer('fg_list_player','id',$index);
			 $data['list_player'] = $this->Mgiaidau->getListUsername('fg_list_player','id',$index);
			 $data['list_chitiet']->tour_id;
			 $_SESSION['id_giaidau']=$this->Mgiaidau->getRowByColumn('fg_tournaments','tour_id',$index);
			 $id_giaidau=$data['list_chitiet']->tour_id;//lay duoc id cua giai dau
			 if(isset($_SESSION['front_user_fullname'])){
				 $data['checkStatus']  =  $this->Mgiaidau->check($_SESSION['front_user_id'],$index);
				 $data['step']  =  $this->Mgiaidau->getListFull('fg_step');
					 $data['listPlayer'] = $this->Mgiaidau->CountPlayer('fg_list_player',$_SESSION['front_user_id'],$index);
					 //var_dump($data['listPlayer']); die();
					 //echo $data['listPlayer']; die();
					 $data['list_player'] = $this->Mgiaidau->getListUsername('fg_list_player',$_SESSION['front_user_id'],$index);
					 //var_dump($data['list_player']); die();
					 $data['items']  =  $this->Mgiaidau->getListOffset('fg_tournaments',10,$index);
					 //var_dump($data['items']); die();
					 $data['list_tour'] = $this->Mgiaidau->getListFull('fg_tournaments');
					 $model=new CI_Model();
					 $data['module']  =  $this->module;
					 $data['page']  =  'vdetail';
				
			}else{
				$data['page']  =  'vdetaillogin';
			}
			 
			 $data['index']  =  -1;
			 $this->load->view('front/container',$data);
	}
	
}