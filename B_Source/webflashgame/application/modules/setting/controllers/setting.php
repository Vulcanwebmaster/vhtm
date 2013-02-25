<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Setting extends NIW_Controller
{
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Msetting');
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
			$data['step']  =  $this->Msetting->getListFull('fg_step');
			$data['info']=$this->Msetting->getRowByColumn('fg_games','game_id',$index);
			$data['list_hotro'] = $this->Msetting->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Msetting->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Msetting->getListFull('fg_slide');
			$data['list_banner'] = $this->Msetting->getListFull('fg_banner');
			$data['list_category'] = $this->Msetting->getListFull('fg_category');
			$data['link_fanpage'] = $this->Msetting->getRowByColumn('fg_setting','id',1);
			$data['list_games'] = $this->Msetting->getListFull('fg_games');
			$config['base_url'] = base_url().'setting/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Msetting->getListFull('fg_setting'));
			$this->pagination->initialize($config);
			$data['title']='games | Flash-games';
			$data['items']=$this->Msetting->getListOffset('fg_setting',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			//$data['account_chitiet']  =  $this->Msetting->getRowByColumn('fg_setting','id',$_SESSION['front_user_id']);
			//var_dump($data['account_chitiet']); die();
			if(isset($_SESSION['front_user_fullname'])){
				$username = $_SESSION['front_user_fullname'];
				$kiemtra = $this->Msetting->getRowByColumn('fg_accounts','username',$username);
				if($kiemtra->money >= 10000){
					$data['page']='vgiaidauuser';
					$this->load->view('front/container',$data);
				}else{
					$this->session->set_userdata('result','you must have a account user gold to create tournament.');
					redirect(base_url().'giaidau','refresh');
				}
			}
			else{
				$_SESSION['front_login_error'] = 'input username and password.';
				$this->session->set_userdata('result','username or password false.');
				redirect(base_url().'login','refresh');
			}
			
		}
		
		
		function _input()
		{
		$input=array(
					'top1'=>$this->input->post('top1'),
					'top2'=>$this->input->post('top2'),
					'top3'=>$this->input->post('top3'),
					'top4'=>$this->input->post('top4'),
					'top5'=>$this->input->post('top5'),
					'top6'=>$this->input->post('top6'),
					'top7'=>$this->input->post('top7'),
					'name_tour'=>$this->input->post('name_tour'),
					'name_tourfr'=>$this->input->post('name_tourfr'),
					'start_date'=>$this->input->post('start_date'),
					'end_date'=>$this->input->post('end_date'),
					'players'=>$this->input->post('players'),
					'top8'=>$this->input->post('top8'),
					'rules'=>$this->input->post('rules'),
					'rulesfr'=>$this->input->post('rulesfr'),
					'top9'=>$this->input->post('top9'),
					'top10'=>$this->input->post('top10'),
					'tienthuong'=>$this->input->post('tienthuong'));
		return $input;
		}
		
	
	function send()
		
		{
			 if(($this->input->post('top1'))
				+($this->input->post('top2'))+ ($this->input->post('top3'))
				+($this->input->post('top4'))+ ($this->input->post('top5'))
				+($this->input->post('top6'))+ ($this->input->post('top7'))
				+($this->input->post('top8'))+ ($this->input->post('top9'))
				+($this->input->post('top10'))==100 
				)
			 	{
			 		$data['thuong_detail']  =  $this->Msetting->getRowByColumn('fg_tournaments','tour_id',1);
			 		$input=$this->_input();
					$this->Msetting->insertNewRow('fg_tournaments',$input);
					redirect(base_url(),'refresh');
				}
			else $this->session->set_userdata('lienhe_result','Send not success !');
			
		}
		
}